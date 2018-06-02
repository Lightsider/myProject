<html>
    <head>
        <title>
            Мой супер калькулятор
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
    $alfavit="0123456789C=+-*/.";
    $message="";
    if(isset($_POST['screen']))
    {
        $screen=$_POST['screen'];
        if(isset($_POST['sym']))
        {
            $sym=$_POST['sym'];
            $hack=true;
            if(strlen($sym)===1)
            {
                for($i=0;$i<strlen($alfavit);$i++)
                {
                    if ($alfavit[$i] === $sym)
                    {
                        $hack=false;
                    }
                }
            }
            if($hack===true)
            {
                $message="Хакер, мышь твою, а ну иди сюда...";
                $screen=$message;
            }
            else
            {
                $message="Видишь, как хорошо все работает. Ай да я!";
                if($sym==="=")
                {
                    $k=preg_match("%[0-9][+|-|*|/][0-9]%",$screen);
                    if($k==1)
                    {
                        @eval("\$screen = $screen;");
                        if(is_numeric($screen))
                            $message="Видишь, как хорошо все работает. Ай да я!";
                        else $message="ЫЫЫЫЫКакПользоватьсяКалькуляторомЫЫЫЫЫ";
                    }
                    else $message="ЫЫЫЫЫКакПользоватьсяКалькуляторомЫЫЫЫЫ";
                }
                elseif($sym==="C")
                {
                    $screen="";
                }
                else
                {
                    $screen .= $sym;
                }
            }

        }
        else
        {
            $message="ЫЫЫЫЫКакПользоватьсяКалькуляторомЫЫЫЫЫ";
        }

    }

    ?>
        <div class="title">
            Привет! Я посмотрел обучающий вебинар и теперь я тру программист!<br>
            Восхищайся моим калькулятором!
        </div>
        <form method="post" id="calc">
            <div class="tab">
                <table>
                    <tr><td colspan="4"> <p align=center class="caltit">Obi-Wan и КО </p></td></tr>
                    <tr><td  colspan="3"><input type="text" name="screen" class="screen" readonly value="<?php if(isset($screen))echo $screen?>"></td>
                        <td><button type="submit"  class="clear" name="sym" value="C" form="calc"> C </button></td></tr>
                    <tr><td><button type="submit" class="num" name="sym" value="7" form="calc"> 7 </button></td>
                        <td><button type="submit" class="num" name="sym" value="8" form="calc"> 8 </button></td>
                        <td><button type="submit" class="num" name="sym" value="9" form="calc"> 9 </button></td>
                    <td><button type="submit" class="num" name="sym" value="+" form="calc"> + </button></td></tr>

                    <tr><td><button type="submit" class="num" name="sym" value="4" form="calc"> 4 </button></td>
                        <td><button type="submit" class="num" name="sym" value="5" form="calc"> 5 </button></td>
                    <td><button type="submit" class="num" name="sym" value="6" form="calc"> 6 </button></td>
                        <td><button type="submit" class="num" name="sym" value="-" form="calc"> - </button></td></tr>

                    <tr><td><button type="submit" class="num" name="sym" value="1" form="calc"> 1 </button></td>
                        <td><button type="submit" class="num" name="sym" value="2" form="calc"> 2 </button></td>
                        <td><button type="submit" class="num" name="sym" value="3" form="calc"> 3 </button></td>
                        <td><button type="submit" class="num" name="sym" value="/" form="calc"> / </button></td></tr>

                    <tr><td><button type="submit" class="num" name="sym" value="0" form="calc"> 0 </button></td>
                        <td><button type="submit" class="num" name="sym" value="." form="calc"> . </button></td>
                        <td><button type="submit" class="res" name="sym" value="=" form="calc"> = </button></td>
                        <td><button type="submit" class="num" name="sym" value="*" form="calc"> * </button></td></tr>
                </table>
            </div>
        </form>
        <div class="message">
            <?php echo $message?>
        </div>
    </body>
</html>