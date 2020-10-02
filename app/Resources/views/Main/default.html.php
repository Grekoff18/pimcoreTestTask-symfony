<?php
    use AppBundle\Controller\MainController;
    $main = new MainController();
    // appending base template
    $this->extend('base.html.php');
    // rewriting title tag
    $this->slots()->set('title', 'SignIn');
?>
<!--Sign In Form-->
<div class="form_wrapper">
    <form action="" id="signin">
        <label>Sign In</label>
        <input type="text" id="username" name="username" placeholder="Type your username">
        <input type="text" id="password" name="password" placeholder="Type your password">
        <button class="form_btn" type="submit">
            <?php if ($main->getImg(6)) { ?>
                <img src="<?=$main->getImg(6)->getThumbnail("btn");?>">
            <?php } ?>
        </button>
        <p>
            <?=$this->input("link-description");?>
            <?php
               // Creates a block that generates links
                while ($this->block("signInLink", ["limit" => 1])->loop()) {
                    echo $this->link("link", ["class" => "register_link"]);
                }
            ?>
        </p>
    </form>
</div>
