<p>Галавная страница</p>

<?php foreach($vars['news'] as $val): ?>
    <h3><?php echo $val['title']; ?></h3>
    <p><?php echo $val['description']; ?></p>
<?php endforeach; ?>