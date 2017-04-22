<div class="login" style="margin-top:20px;">
<div class="container">

<h1>Edit Data Berita</h1>
<span style="color:red">
</span>
<form class="form-horizontal" action="<?php echo base_url('home/update');?>" method="POST" >

      <input type="hidden" class="form-control" id="id" placeholder="id" name="id" value="<?php echo $data->id;?>" readonly>
    

    <label for="username" class="col-sm-2 control-label">Title</label>

      <input type="text" class="form-control" id="TITLE" placeholder="title" name="title" value="<?php echo $data->title;?>">
<br><br>
    <label for="inputPassword3" class="col-sm-2 control-label">Content</label>

      <input type="text" class="form-control" id="content" placeholder="Content" name="content" value="<?php echo $data->content;?>">

<br><br>
    <div class="form-group">
            <label class="col-md-3 control-label" for="name">Category</label>
            <input type=text value="<?php echo $data->category;?>" name="contoh" disabled /><br><br>
            <div class="col-md-9">
              <select class="form-control" name="id_ca"><?php
                echo "<option value='' selected> Edit Kategory </option>";
                foreach($kategori as $r){echo "
                <option value=".$r->id_ca.">
                ".$r->category."</option>";}?>
              </select>
            </div>
          </div>
  </div>

    <label for="username" class="col-sm-2 control-label">Image</label>
  
      <input type="text" class="form-control" id="Image" placeholder="image" name="image" value="<?php echo $data->image;?>">
<br><br>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Update</button>
    </div>
  </div>
</form>

</div></div>