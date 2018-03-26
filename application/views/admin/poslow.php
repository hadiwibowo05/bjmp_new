<?php include('repo/head.php');?>
	<?php include('repo/side.php');?>
			<!-- /HEADER -->


			<!-- 
				MIDDLE 
			-->
			<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>Posisi Lowongan</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Posisi Lowongan</li>
					</ol>
				</header>
				<!-- /page title -->


				<div id="content" class="padding-20">

					<!-- 
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success

						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->
					<div id="panel-1" class="panel panel-default">
						<div class="panel-heading">
							<span class="title elipsis">
								<strong>Posisi Lowongan</strong> <!-- panel title -->
							</span>

							<!-- right options -->
							<ul class="options pull-right list-inline">
								<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
								<li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
								<li><a href="#" class="opt panel_close" data-confirm-title="Confirm" data-confirm-message="Are you sure you want to remove this panel?" data-toggle="tooltip" title="Close" data-placement="bottom"><i class="fa fa-times"></i></a></li>
							</ul>
							<!-- /right options -->

						</div>

						<!-- panel content -->
						<div class="panel-body">

							<table id="jqgrid"></table>
							<div id="pager_jqgrid"></div>

							<br />

							<a href="javascript:;" class="btn btn-default select_unselect_row">Select/Unselect Row By ID</a>
							<a href="javascript:;" class="btn btn-default get_selected_ids">Get Selected ID's</a>
							<a href="javascript:;" class="btn btn-default delete_row">Delete Inv. No #1</a>

						</div>
						<!-- /panel content -->

						<!-- panel footer -->
						<div class="panel-footer">



						</div>
						<!-- /panel footer -->

					</div>
					<!-- /PANEL -->

				</div>
			</section>
			<!-- /MIDDLE -->

		</div>



	
		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '<?php echo base_url()?>template/backend/assets/plugins/';</script>
		<script type="text/javascript" src="<?php echo base_url()?>template/backend/assets/plugins/jquery/jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>template/backend/assets/js/app.js"></script>

		<!-- PAGE LEVEL SCRIPTS -->
		<script type="text/javascript">
			loadScript(plugin_path + "jqgrid/js/jquery.jqGrid.js", function(){
				loadScript(plugin_path + "jqgrid/js/i18n/grid.locale-en.js", function(){
					loadScript(plugin_path + "bootstrap.datepicker/js/bootstrap-datepicker.min.js", function(){

						var jqgrid_data = [{
							id : "1",
							date : "2014-10-01",
							name : "Test 1",
							note : "Note 1",
							amount : "150.00",
							tax : "15.00",
							total : "210.00"
						}, {
							id : "2",
							date : "2014-10-02",
							name : "Test 2",
							note : "Note 2",
							amount : "220.00",
							tax : "22.00",
							total : "320.00"
						}, {
							id : "3",
							date : "2014-09-01",
							name : "Test 3",
							note : "Note 3",
							amount : "40.00",
							tax : "4.00",
							total : "430.00"
						}, {
							id : "4",
							date : "2014-10-04",
							name : "Test 4",
							note : "Note 4",
							amount : "510.00",
							tax : "51.00",
							total : "210.00"
						}, {
							id : "5",
							date : "2014-10-05",
							name : "Test 5",
							note : "Note 5",
							amount : "210.00",
							tax : "21.00",
							total : "320.00"
						}, {
							id : "6",
							date : "2014-09-06",
							name : "Test 6",
							note : "Note 6",
							amount : "70.00",
							tax : "7.00",
							total : "430.00"
						}, {
							id : "7",
							date : "2014-10-04",
							name : "Test 7",
							note : "Note 7",
							amount : "80.00",
							tax : "10.00",
							total : "210.00"
						}, {
							id : "8",
							date : "2014-10-03",
							name : "Test 8",
							note : "Note 8",
							amount : "300.00",
							tax : "10.00",
							total : "320.00"
						}, {
							id : "9",
							date : "2014-09-01",
							name : "Test 9",
							note : "Note 9",
							amount : "90.00",
							tax : "10.00",
							total : "430.00"
						}, {
							id : "10",
							date : "2014-10-01",
							name : "Test 10",
							note : "Note 10",
							amount : "200.00",
							tax : "20.00",
							total : "210.00"
						}, {
							id : "11",
							date : "2014-10-02",
							name : "Test 11",
							note : "Note 11",
							amount : "77.00",
							tax : "9.00",
							total : "320.00"
						}, {
							id : "12",
							date : "2014-09-01",
							name : "Test 12",
							note : "Note 12",
							amount : "56.00",
							tax : "8.00",
							total : "430.00"
						}, {
							id : "13",
							date : "2014-10-04",
							name : "Test 13",
							note : "Note 13",
							amount : "554.00",
							tax : "10.00",
							total : "210.00"
						}, {
							id : "14",
							date : "2014-10-05",
							name : "Test 14",
							note : "Note 14",
							amount : "265.00",
							tax : "2.00",
							total : "320.00"
						}, {
							id : "15",
							date : "2014-09-06",
							name : "Test 15",
							note : "Note 15",
							amount : "765.00",
							tax : "3.00",
							total : "430.00"
						}, {
							id : "16",
							date : "2014-10-04",
							name : "Test 16",
							note : "Note 16",
							amount : "89.00",
							tax : "1.00",
							total : "210.00"
						}, {
							id : "17",
							date : "2014-10-03",
							name : "Test 17",
							note : "Note 17",
							amount : "99.00",
							tax : "2.00",
							total : "320.00"
						}, {
							id : "18",
							date : "2014-09-01",
							name : "Test 18",
							note : "Note 18",
							amount : "49.00",
							tax : "3.00",
							total : "430.00"
						}];

						// ----------------------------------------------------------------------------------------------------
						jQuery("#jqgrid").jqGrid({
							data : jqgrid_data,
							datatype : "local",
							height : '250',
							colNames : ['Actions', 'Inv No', 'Date', 'Client', 'Amount', 'Tax', 'Total', 'Notes'],
							colModel : [
								{ name : 'act', index:'act', sortable:false }, 
								{ name : 'id', index : 'id' }, 
								{ name : 'date', index : 'sdate', editable : true, sorttype:"date",unformat: pickDate }, 
								{ name : 'name', index : 'name', editable : true }, 
								{ name : 'amount', index : 'amount', align : "right", editable : true }, 
								{ name : 'tax', index : 'tax', align : "right", editable : true }, 
								{ name : 'total', index : 'total', align : "right", editable : true }, 
								{ name : 'note', index : 'note', sortable : false, editable : true }],
							rowNum : 10,
							rowList : [10, 20, 30],
							pager : '#pager_jqgrid',
							sortname : 'id',
							toolbarfilter: true,
							viewrecords : true,
							sortorder : "asc",
							gridComplete: function(){
								var ids = jQuery("#jqgrid").jqGrid('getDataIDs');
								for(var i=0;i < ids.length;i++){
									var cl = ids[i];
									be = "<button class='btn btn-xs btn-default btn-quick' title='Edit Row' onclick=\"jQuery('#jqgrid').editRow('"+cl+"');\"><i class='fa fa-pencil'></i></button>"; 
									se = "<button class='btn btn-xs btn-default btn-quick' title='Save Row' onclick=\"jQuery('#jqgrid').saveRow('"+cl+"');\"><i class='fa fa-save'></i></button>";
									ca = "<button class='btn btn-xs btn-default btn-quick' title='Cancel' onclick=\"jQuery('#jqgrid').restoreRow('"+cl+"');\"><i class='fa fa-times'></i></button>";  
									jQuery("#jqgrid").jqGrid('setRowData',ids[i],{act:be+se+ca});
								}	
							},
							editurl : "ajax/dummy-jqtable.html",
							caption : "Posisi Lowongan Aktif",
							multiselect : true,
							autowidth : true,
						});			
						// ----------------------------------------------------------------------------------------------------

						//enable datepicker
						function pickDate( cellvalue, options, cell ) {
							setTimeout(function(){
								jQuery(cell) .find('input[type=text]')
										.datepicker({format:'yyyy-mm-dd' , autoclose:true}); 
							}, 0);
						}

						jQuery("#jqgrid").jqGrid('navGrid', "#pager_jqgrid", {
							edit : false,
							add : false,
							del : true
						});

						jQuery("#jqgrid").jqGrid('inlineNav', "#pager_jqgrid");

						// Get Selected ID's
						jQuery("a.get_selected_ids").bind("click", function() {
							s = jQuery("#jqgrid").jqGrid('getGridParam', 'selarrrow');
							alert(s);
						});

						// Select/Unselect specific Row by id
						jQuery("a.select_unselect_row").bind("click", function() {
							jQuery("#jqgrid").jqGrid('setSelection', "13");
						});

						// Select/Unselect specific Row by id
						jQuery("a.delete_row").bind("click", function() {
							var su=jQuery("#jqgrid").jqGrid('delRowData',1);
							if(su) alert("Succes. Write custom code to delete row from server"); else alert("Already deleted or not in list");
						});


						// On Resize
						jQuery(window).resize(function() {

							if(window.afterResize) {
								clearTimeout(window.afterResize);
							}

							window.afterResize = setTimeout(function() {

								/**
									After Resize Code
									.................
								**/

								jQuery("#jqgrid").jqGrid('setGridWidth', jQuery("#middle").width() - 32);

							}, 500);

						});

						// ----------------------------------------------------------------------------------------------------

						/**
							@STYLING
						**/
						jQuery(".ui-jqgrid").removeClass("ui-widget ui-widget-content");
						jQuery(".ui-jqgrid-view").children().removeClass("ui-widget-header ui-state-default");
						jQuery(".ui-jqgrid-labels, .ui-search-toolbar").children().removeClass("ui-state-default ui-th-column ui-th-ltr");
						jQuery(".ui-jqgrid-pager").removeClass("ui-state-default");
						jQuery(".ui-jqgrid").removeClass("ui-widget-content");

						jQuery(".ui-jqgrid-htable").addClass("table table-bordered table-hover");
						jQuery(".ui-pg-div").removeClass().addClass("btn btn-sm btn-primary");
						jQuery(".ui-icon.ui-icon-plus").removeClass().addClass("fa fa-plus");
						jQuery(".ui-icon.ui-icon-pencil").removeClass().addClass("fa fa-pencil");
						jQuery(".ui-icon.ui-icon-trash").removeClass().addClass("fa fa-trash-o");
						jQuery(".ui-icon.ui-icon-search").removeClass().addClass("fa fa-search");
						jQuery(".ui-icon.ui-icon-refresh").removeClass().addClass("fa fa-refresh");
						jQuery(".ui-icon.ui-icon-disk").removeClass().addClass("fa fa-save").parent(".btn-primary").removeClass("btn-primary").addClass("btn-success");
						jQuery(".ui-icon.ui-icon-cancel").removeClass().addClass("fa fa-times").parent(".btn-primary").removeClass("btn-primary").addClass("btn-danger");

						jQuery( ".ui-icon.ui-icon-seek-prev" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
						jQuery(".ui-icon.ui-icon-seek-prev").removeClass().addClass("fa fa-backward");

						jQuery( ".ui-icon.ui-icon-seek-first" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
						jQuery(".ui-icon.ui-icon-seek-first").removeClass().addClass("fa fa-fast-backward");		  	

						jQuery( ".ui-icon.ui-icon-seek-next" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
						jQuery(".ui-icon.ui-icon-seek-next").removeClass().addClass("fa fa-forward");

						jQuery( ".ui-icon.ui-icon-seek-end" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
						jQuery(".ui-icon.ui-icon-seek-end").removeClass().addClass("fa fa-fast-forward");
			
					});
				});
			});
		</script>

	</body>
</html>