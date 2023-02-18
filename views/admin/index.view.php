

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Admin</h1>
        </div>
      </div>
      <div class="row">
          <a href="create.php">Create new term</a>
      </div>
      <div class="row">
      <!-- Content here -->
          <table class = "table table-striped">
        <?php
          foreach ($model as $item) : ?>
            <tr>
              <td><a href="edit.php?key=<?= $item->id;?>"> Edit</a></td>
              <td> <?= $item->term;?> </td>
              <td> <?= $item->definition;?></td>
              <td><a href="delete.php?key=<?= $item->id;?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>

  
        </table>
      </div>
    </div>

