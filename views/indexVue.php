<?php
  include 'template/header.php';
?>
  <div class="container-loading" id="loader">

  </div>
  <div class="search-bar displayElement" >
    <form action="" method="post">
      <input type="text" placeholder="Recherchez" required>
      <input type="submit" value="Recherche">
    </form>
  </div>
  <div class="container displayElement">

<?php
  foreach ($books as $book) {
      ?>
        <div class="container-book displayElement">
          <div class="card-book">
            <div class="book-body">
              <img src="../assets/img/<?= $book->getPicture(); ?>" class="coverBook" alt="Livre <?= $book->getTitle(); ?>">
            </div>
            <p class="header-book"><?= $book->getTitle(); ?></p>
          </div>
        </div>
        <?php
  }
  ?>
  </div>


 <?php
   include 'template/footer.php'; ?>
