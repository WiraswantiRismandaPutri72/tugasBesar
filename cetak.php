<div class="container">
  <h2 class="text-center mt-5">DATA OBAT DRUGSTORE</h2>     
  </form>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID OBAT</th>
        <th>NAMA OBAT OBAT</th>
        <th>JENIS OBAT</th>
        <th>DESKRIPSI</th>
        <th>STOK OBAT</th>
        <th>HARGA OBAT</th>
      </tr>
    </thead>
    <?php
                include "myconnection.php";

                $query = "SELECT * FROM obat";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row["id"]; ?> </td>
                <td> <?php echo $row["nama_obat"]; ?> </td>
                <td> <?php echo $row["jenis_obat"]; ?> </td>
                <td> <?php echo $row["deskripsi"]; ?> </td>
                <td> <?php echo $row["stok_obat"]; ?> </td>
                <td> <?php echo $row["harga_obat"]; ?> </td>
            </tr>
            <?php
                    }
                }
                else{
                    echo "0 results";
                }
            ?>
  </table>
  <script>
        window.print();
    </script>
</div>