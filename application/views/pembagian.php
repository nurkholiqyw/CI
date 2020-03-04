<h1><?php echo $judul; ?></h1>
<?php echo form_open('hitung/pembagian'); ?>
<?php echo form_input('angka1', $angka1); ?> /
<?php echo form_input('angka2', $angka2); ?>
<br>
<?php echo form_submit('submit','Hitung'); ?>
<?php echo form_close(); ?>
<br>
Hasil : <?php echo $hasil; ?>

<ul>
	<li><?php echo anchor('hitung','kembali'); ?>
</ul>