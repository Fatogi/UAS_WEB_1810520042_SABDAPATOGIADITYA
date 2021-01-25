<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}
</style>

<section class="content-header">
  <h1>
    Artikel
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-newspaper-o"></i> Artikel</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
    <div class="box">
    <div class="box-header">
    <table id="data" class="table table-bordered table-scalable table-hover dataTable no-footer">
      <thead hidden="active">
      <th>Judul</th>
      </thead>
      <tbody>
        <?php
          $query = mysqli_query ($conn, "SELECT * FROM artikel ORDER BY tgl_artikel DESC");
          if($query == false){
            die ("Terjadi Kesalahan : ". mysqli_error($conn));
          }
          while ($a = mysqli_fetch_array ($query)){ ?>
            <tr>
              <td>
              <section>
              <div class="row">
              <div class="col-md-5">
              <img src="../upload/artikel/<?php echo $a['gambar']; ?>" width="400" height="200">
              </div>
              <div class="col-md-7">
              <br><br><a href="../member/index.php?page=d_artikel&id=<?php echo $a['id_artikel']; ?>"><h3 align="justify" style="padding:0 10px;font-size: 14pt; font-family: impact;"><?php echo $a['judul_artikel']; ?></h3></a>
              <div class="clearfix">
              <p class="date-comments" align="justify" style="padding:0 10px;font-size: 11pt;">
                <a href="#"><i class="fa fa-calendar-o"></i>&nbsp &nbsp<?php echo date('l, d F Y ', strtotime($a['tgl_artikel'])); ?></a>
              </p>
              </div>
              <p class="read-more"><a href="../member/index.php?page=d_artikel&id=<?php echo $a['id_artikel']; ?>" class="button button1 pull-right">Baca Lengkap</a></p>
              </div>
              </div>
              </section>
              </td>
            </tr>
          <?php  
          }
        ?>
      </tbody>
    </table>

    </div>
    </div>
    </div>
  </div>
</section><!-- /.content -->

<script>
  
  $(document).ready(function(){
      $("#data").DataTable({
        "aaSorting": [],
      });
  });

</script>