<h2 style="margin-top: 0;">
    <small>Selamat datang</small>
    <br />
    <?php echo $_SESSION['nama'] ?>
</h2>
<hr />

<div class="form-group">
    <label>Role</label>
    <br /><?php echo ucwords($_SESSION['role']) ?>
</div>
