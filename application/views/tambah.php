<div class="login" style="margin-top:20px;">
<div class="container">

<h1>Tambah Berita</h1>
<span style="color:red">
</span>
<form class="form-horizontal" action="<?php echo base_url('home/add');?>" method="POST" >
<div class="form-group">
    
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">Title</label>

      <input type="text" class="form-control" id="TITLE" placeholder="title" name="title" value="">
<br><br>
    <label for="inputPassword3" class="col-sm-2 control-label">Content</label>
 
      <input type="text" class="form-control" id="content" placeholder="Content" name="content" value="">
<br><br>
            <label class="col-md-3 control-label" for="name">Category</label>
          
              <select class="form-control" name="id_ca"><?php
                echo "<option value='' selected> Pilih Kategory </option>";
                foreach($kategori as $r){echo "
                <option value=".$r->id_ca.">
                ".$r->category."</option>";}?>
              </select>
<br><br>

    <label for="username" class="col-sm-2 control-label">Image</label>
    <div class="col-sm-10">
      <input name="userfile[]" type="file" value="" class="form-control">
<br><br>
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Tambah</button>
    </div>
  </div>
</form>

</div></div>