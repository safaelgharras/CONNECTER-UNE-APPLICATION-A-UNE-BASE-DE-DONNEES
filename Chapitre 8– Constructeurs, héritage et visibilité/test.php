<?php
require "enfant.php";

$article = new blogArticle("Les Frères Karamazov", "Un roman profond sur la foi, le doute, la liberté et le parricide, à travers l’histoire de trois frères très différents.", "Fiodor Dostoïevski");
echo $article->afficher();