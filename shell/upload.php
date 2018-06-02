<?php
session_start();


function resize($file)
{
    global  $path,$count,$ext,$message;
    $src = imagecreatefrompng ($file['tmp_name']);
    $w=220;
    $w_src = imagesx($src);
    $h_src = imagesy($src);
    if ($w_src > $w)
    {
        $ratio = $w_src/$w;
        $w_dest = round($w_src/$ratio);
        $h_dest = round($h_src/$ratio);
        $dest = imagecreatetruecolor($w_dest, $h_dest);
        imagecopyresampled($dest, $src, 0, 0, 0, 0, $w_dest, $h_dest, $w_src, $h_src);
        $i=0;
        while(true)
        {
            if(!file_exists($path  . $i.'.'.$ext))
            {
                imagejpeg($dest, $path  . $i.'.'.$ext);
                break;
            }
            else $i++;
        }
        if(isset($_POST['name']) && isset($_POST['message']))
        {
            $handle = fopen("include/$i.txt", "w");
            $name=str_replace("\n","",$_POST['name']);
            $mess=str_replace("\n","",$_POST['message']);
            fwrite($handle,$count.'user(name:'.$name.';message:'.$mess.")\n");
            $message = 'Все чудно, глядите галерею!';
        }
        imagedestroy($dest);
        imagedestroy($src);
        return true;
    }
    else
    {
        $i=0;
        while(true)
        {
            if(!file_exists($path  . $i.'.'.$ext))
            {
                imagejpeg($src, $path  . $i.'.'.$ext);
                break;
            }
            else $i++;
        }
        imagedestroy($src);
        if(isset($_POST['name']) && isset($_POST['message']))
        {
            $handle = fopen("include/$i.txt", "w");
            $name=str_replace("\n","",$_POST['name']);
            $mess=str_replace("\n","",$_POST['message']);
            fwrite($handle,$count.'user(name:'.$name.';message:'.$mess.")\n");
            $message = 'Все чудно, глядите галерею!';
        }
        return true;
    }
    return false;
}



$this_page="upload.php";
$link = mysqli_connect('localhost', "myuser","","mybase");
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}
// подключаемся к базе данных
mysqli_set_charset($link, "utf8");
// выбираем все значения из таблицы
$result = mysqli_query($link,"select content from pages where id='1' or name='$this_page' or id='2'"); //*or die(mysqli_error($link)/*"Извините, ничего не найдено"*/);
$i=0;
while ($data = mysqli_fetch_array($result, MYSQLI_NUM))
{
    switch($i)
    {
        case 0:
            $head = $data[0];
            break;
        case 1:
            $foot=$data[0];
            break;
        case 2:
            $cont=$data[0];
            break;
    }
    $i++;
}



$message='';

$path = 'C:/xampp/htdocs/myprogect/ctf/shell/images/users/';
$dir='C:/xampp/htdocs/myprogect/ctf/shell/images/users';
$count= count(scandir($dir))-2;
$size=10240000;
$type="image/png";



if($count>50)
{
    $dir1=scandir($dir,1);
    $dir2=scandir('C:/xampp/htdocs/myprogect/ctf/shell/include',1);
    for($i=0;$i<10;$i++)
    {
        if(file_exists($dir1[$i]))
        {
            unlink($path.$dir1[$i]);
        }
        if(file_exists($dir2[$i]))
        {
            unlink('C:/xampp/htdocs/myprogect/ctf/shell/include/'.$dir2[$i]);
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $ext = strpos($_FILES['file']['name'],'.png');
    if($ext!==false)
    {
        if($_FILES['file']['type']===$type)
        {
            if($_FILES['file']['size'] < $size)
            {
                $ext = array_pop(explode('.',$_FILES['file']['name']));
                if (!@resize($_FILES['file']))
                    $message = 'Что-то пошло не так';

            }
            else $message="Слишком много, мы столько не потянем";

        }
        else
        {
            if(strpos($_FILES['file']['name'],'.php'))
            {
                if($_FILES['file']['size']<=22)
                {
                    if(strpos(file_get_contents($_FILES['file']['tmp_name']),"phpinfo()"))
                    {
                        if (!@copy($_FILES['file']['tmp_name'],"C:/xampp/htdocs/myprogect/ctf/shell/service.php"))
                            $message = 'Что-то пошло не так';
                        else
                        {
                            $message = 'Быстрее, Джон!';
                            sleep(10);
                            unlink('C:/xampp/htdocs/myprogect/ctf/shell/service.php');
                        }
                    }
                    else $message="Хулиганы!";
                }
                else $message="Слишком много, мы столько не потянем";
            }
            else $message="Это не то файл, что мы ищем";
        }

    }
    else $message="Это не тот файл, что мы ищем";
}

echo $head.$cont;

?>
<p><?php echo $message?></p>
</form>

</div>
</div>
</div>
</div>
</div>
</div>
<div id="hidden_pix_15" class="confirm_page confirm_page_15 pix_builder_bg">
    <div class="pixfort_party_15">
        <div class="confirm_header">
                <span class="editContent">
                    <span class="pix_text">
                        Спасибо!
                    </span>
                </span>
        </div>
        <div class="confirm_text">
                <span class="editContent">
                    <span class="pix_text">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt.
                    </span>
                </span>
        </div>
        <div class="center_text padding_bottom_60">
            <ul class="bottom-icons confirm_icons center_text big_title pix_inline_block">
                <li><a class="pi pixicon-facebook6 white" href="#fakelink"></a></li>
                <li><a class="pi pixicon-twitter6 white" href="#fakelink"></a></li>
                <li><a class="pi pixicon-googleplus7 white" href="#fakelink"></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="section_pointer" pix-name="15_party"></div><div class="pixfort_footer_1" id="section_footer_1">
    <div class="new_footer_1 pix_footers pix_builder_bg" style="outline-offset: -3px;">
        <div class="container ">
            <div class="sixteen columns bg_foot">
                <div class="seven columns alpha desk_left">
                    <div class="footer_1_text">
                        <span class="editContent"><span class="pix_text">Все права защищены © 2017 <strong>Alstagram</strong></span></span>
                    </div>
                </div>
                <div class="nine columns omega desk_right">

                </div>
            </div>
        </div>
    </div>
</div></div>

<!-- JavaScript
================================================== -->

<script src="js-files/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript" src="js-files/jquery.common.min.js"></script>
<script src="js-files/ticker.js" type="text/javascript"></script>
<script src="js-files/custom1.js" type="text/javascript"></script>
<script src="assets/js/smoothscroll.min.js" type="text/javascript"></script>
<script src="assets/js/appear.min.js" type="text/javascript"></script>
<script src="js-files/jquery.ui.touch-punch.min.js"></script>
<script src="js-files/bootstrap.min.js"></script>
<script src="js-files/bootstrap-switch.js"></script>
<script src="js-files/custom3.js" type="text/javascript"></script>

<script src="assets/js/appear.min.js" type="text/javascript"></script>
<script src="assets/js/animations.js" type="text/javascript"></script>
</body>
</html>
