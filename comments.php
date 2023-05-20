<?php
// Update the details below with your MySQL details
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'traveldana';
try {
    $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
} catch (PDOException $exception) {
    // If there is an error with the connection, stop the script and display the error
    exit('Failed to connect to database!');
}

// Hàm bên dưới sẽ chuyển đổi ngày giờ thành chuỗi thời gian đã trôi qua
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);
    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;
    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second'
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }
    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? $ago->format('d/m/Y H:i') : 'just now';
}

// Chức năng này sẽ điền vào các bình luận và trả lời bình luận bằng một vòng lặp
function show_comments($comments, $id_blog = -1) {
    $html = '';
    if ($id_blog != -1) {
        // Nếu nhận xét là câu trả lời, hãy sắp xếp chúng theo cột "submit_date"
        array_multisort(array_column($comments, 'submit_date'), SORT_ASC, $comments);
    }
    // Lặp lại các bình luận bằng vòng lặp foreach
    foreach ($comments as $comment) {
        if ($comment['parent_id'] == $id_blog) {
            // Thêm nhận xét vào biến $html
            $html .= '
           <div class="comment">
           <div class="comment-block">
                <div class="user-img">
                <img src="images/user.jpg"  style="height:100px; weight:100px;"class="img-responsive" alt="user-img" />
                    </div>
               <div class="user-text">
                   <ul class="list-inline list-unstyled">
                       <li class="user-name"> ' . htmlspecialchars($comment['name'], ENT_QUOTES) . ' </li>
                       <li class="date">' . time_elapsed_string($comment['submit_date']) . '</li>
                   </ul>
                   <p class="content">' . nl2br(htmlspecialchars($comment['content'], ENT_QUOTES)) . '</p>
                   <a href="#" class="reply_comment_btn" data-comment-id="' . $comment['id'] . '"><i class="fa fa-reply"></i> Reply</a>' . show_write_comment_form($comment['id']) . '
                   <div class="replies">' . show_comments($comments, $comment['id']) . '
                   </div>
               </div>
       </div>
            ';
        }
    }
    return $html;
}

// Chức năng này là mẫu cho biểu mẫu viết bình luận
function show_write_comment_form($id_blog = -1) {
    $html = '
   
    <div class="write_comment" data-comment-id="' . $id_blog . '">
    <form>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <input name="parent_id" type="hidden" value="' . $id_blog . '">
                    <input name="name" type="text" class="form-control input input-lg" placeholder="Your Name" required/>
                </div>
            </div>
            <!-- end columns -->
        </div>
        <!-- end row -->
        <div class="form-group">
            <textarea name="content" class="form-control input-lg" rows="5" placeholder="Your Message"></textarea>
        </div>
        <button class="btn btn-orange">Submit Comment</button>
    </form>
</div>
    ';
    return $html;
}

// ID trang cần tồn tại, ID này được sử dụng để xác định nhận xét nào dành cho trang nào
if (isset($_GET['id_blog'])) {

    // Kiểm tra xem các biến biểu mẫu đã gửi có tồn tại không
    if (isset($_POST['name'], $_POST['content'])) {
        // Các biến POST tồn tại, hãy chèn một nhận xét mới vào bảng nhận xét MySQL (biểu mẫu do người dùng gửi)
        $stmt = $pdo->prepare('INSERT INTO comments (id_blog, parent_id, name, content, submit_date) VALUES (?,?,?,?,NOW())');
        $stmt->execute([ $_GET['id_blog'], $_POST['parent_id'], $_POST['name'], $_POST['content'] ]);
        header('Location: blog.php');
    }
    // Get all comments by the Page ID ordered by the submit date
    $stmt = $pdo->prepare('SELECT * FROM comments WHERE id_blog = ? ORDER BY submit_date DESC');
    $stmt->execute([ $_GET['id_blog'] ]);
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Get the total number of comments
    $stmt = $pdo->prepare('SELECT COUNT(*) AS total_comments FROM comments WHERE id_blog = ?');
    $stmt->execute([ $_GET['id_blog'] ]);
    $comments_info = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    exit('No page ID specified!');
}
?>
<div class="comment_header">
    <span class="total"><?=$comments_info['total_comments']?> comments</span>
    <a href="#" class="write_comment_btn" data-comment-id="-1">Write Comment</a>
</div>

<?=show_write_comment_form()?>

<?=show_comments($comments)?>