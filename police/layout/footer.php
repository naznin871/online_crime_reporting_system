	<!-- DataTables -->
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script>
	  $(function () {
	    $('#example1').DataTable()
	    $('#example2').DataTable({
	      'paging'      : true,
	      'lengthChange': false,
	      'searching'   : false,
	      'ordering'    : true,
	      'info'        : true,
	      'autoWidth'   : false
	    })
	  })
	</script>
	<script type="text/javascript">
	    $(document).ready(function(){
	      $('.nav_btn').click(function(){
	        $('.mobile_nav_items').toggleClass('active');
	      });
	    });
	</script>
  </body>
</html>