<?php include 'inc/header.php'; ?>

<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($connection, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2>Past Feedback</h2>

<?php if (empty($feedback)) : ?>
  <p class="lead mt-3">No feedback yet</p>
<?php endif; ?>

<?php foreach ($feedback as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <p><?= $item['body'] ?></p>
      <h5 class="text-secondary mt-2">
        By <?= $item['name'] ?> on <?php echo date('Y-m-d H:i', strtotime($item['date'])); ?>
      </h5>
    </div>
  </div>
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>