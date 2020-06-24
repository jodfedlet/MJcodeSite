
<?php
include 'adm-head.php';
include_once'../MJcode.php';
if ($_SESSION['name'] != null){
$MJcode = new MJcode();
list($response,$page) = $MJcode->getContacts();
 ?>

				 <div class="row">
					<div class="col-sm-12 push-m3" >
						  <h2 class="text-center" id="clients">Clients</h2>
						 
						  <table class="table table-striped">
							    <thead>
							      <tr style="font-size: 17px;font-family: 'Shadows Into Light', cursive;text-transform: uppercase;" class="text-center">
							      	 <th scope="col">ID<a href="?order=id&sort=asc">&and;</a><a href="?order=id&sort=desc">&or;</a></th>
			    <th scope="col">NAME<a href="?order=name&sort=asc">&and;</a><a href="?order=name&sort=desc">&or;</a></th>
			    <th scope="col">EMAIL<a href="?order=email&sort=asc">&and;</a><a href="?order=email&sort=desc">&or;</a></th>
			     <th scope="col">MESSAGE<a href="?order=message&sort=asc">&and;</a><a href="?order=message&sort=desc">&or;</a></th>
			     <th scope="col">DATE<a href="?order=clock&sort=asc">&and;</a><a href="?order=clock&sort=desc">&or;</a></th>
			    <th scope="col">OPTION</th>
							      </tr>
							    </thead><br>
							    	<tbody>
        <?php if(count($response) == 0){
				?>
				<tr>
					<td colspan="8">
                <div class="alert alert-info" align="center">
                    There is no Contact
              </div>
        </td>
				</tr>
				<?php	
		  	}else
             foreach($response as $value) {
                $date = $value['clock'];
            ?>
            <tr>
              <td><?= $value['id']?></td>
              <td><?= $value['name']?></td>
              <td><?= $value['email']?></td>
              <td><?= $value['message']?></td>
              <td><?= date('d/m/Y H:i:s', strtotime($date))?></td>
              <td>
                <a href="remove.php?id=<?=$value['id']?>"><button type="button" class="btn btn-danger"  onclick="return deleteConfirm()">Delete</button></a>
              </td>
            </tr>
          <?php }?>
        </tbody>

							</table>
							 <ul class="pagination" id="pagination">
      <?php
          for($i = 1; $i<= $page; $i++){
           echo '<li class="page-item"><a class="page-link" href="clients.php?page=' .$i. '">' .$i. '</a></li>';
          }
      ?>  
      </ul> 	

					</div>	
				</div>
			</div>
		</div>
	</div>
    <?php
}else{
    header("Location: index.php");
}
include_once 'footer.php';
?>
