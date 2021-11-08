<div style="width: 1000px; padding-left:50px; padding-top:10px">
    <form action="RegisterForm/upload_file" method="post" enctype="multipart/form-data">
        <input type="text" name="imgEmail" value="<?php echo $this->session->userdata('email');?>" readonly hidden><br/>
        <label for="inputCitys">image</label><br/>
        <input type="file" name="image" id="image" >
        <input type="submit" value="Upload">
    </form>
</div>