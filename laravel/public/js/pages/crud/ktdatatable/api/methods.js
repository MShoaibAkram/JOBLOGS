"use strict";
// Class definition



var KTUsersTable = function() {
	// Private functions

	// basic demo
	var getUsers = function() {

        var URL = CHILD_URL != undefined ? CHILD_URL : "/api/datatables/demos/default.php";
		var options = {
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: HOST_URL + URL,
					},
				},
				pageSize: 20, // display 20 records per page
				serverPaging: true,
				serverFiltering: true,
				serverSorting: true,
			},

			// layout definition
			layout: {
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				height: 550, // datatable's body's fixed height
				footer: false, // display/hide footer
			},

			// column sorting
			sortable: true,

			pagination: true,

			search: {
				input: $('#kt_datatable_search_query'),
				key: 'generalSearch'
			},

			// columns definition
			columns: [
				{
					field: 'ID',
					title: '#',
					sortable: false,
					type: 'number',
					width: 30,
					selector: true,
					textAlign: 'center',
					template: function(row) {
						return row.RecordID;
					},
				},
				{
					field: 'id',
					title: 'ID',
					width: 30,
					type: 'number',
				}, {
					field: 'name',
					title: 'Name',
				}, {
					field: 'email',
					title: 'Email',
				}, {
					field: 'country_code',
					title: 'Country',
				}, {
					field: 'role',
					title: 'Role',
				}, {
					field: 'Actions',
					title: 'Actions',
					sortable: false,
					width: 125,
					overflow: 'visible',
					autoHide: false,
					template: function(row) {
						return '<div class="dropdown dropdown-inline">\
								<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown">\
	                                <i class="la la-cog"></i>\
	                            </a>\
							</div>\
							<a href='+BASE_URL+'/user/edit/'+row.id+' class="btn btn-sm btn-clean btn-icon" title="Delete">\
								<i class="la la-edit"></i>\
							</a>\
							<button onclick="showConfirmDelete(\''+ row.id + '\' , \'' + row.name + '\' , \'' + row.email + '\', \'user\' )" href='+BASE_URL+'user/edit/'+row.id+' class="btn btn-sm btn-clean btn-icon" title="InActive User">\
								<i class="la la-trash"></i>\
							</button>\
						';
					},
				}],

		};

		var datatable = $('#kt_datatable').KTDatatable(options);

		// both methods are supported
		// datatable.methodName(args); or $(datatable).KTDatatable(methodName, args);

		$('#kt_datatable_destroy').on('click', function() {
			// datatable.destroy();
			$('#kt_datatable').KTDatatable('destroy');
		});

		$('#kt_datatable_init').on('click', function() {
			datatable = $('#kt_datatable').KTDatatable(options);
		});

		$('#kt_datatable_reload').on('click', function() {
			// datatable.reload();
			$('#kt_datatable').KTDatatable('reload');
		});

		$('#kt_datatable_sort_asc').on('click', function() {
			datatable.sort('Status', 'asc');
		});

		$('#kt_datatable_sort_desc').on('click', function() {
			datatable.sort('Status', 'desc');
		});

		// get checked record and get value by column name
		$('#kt_datatable_get').on('click', function() {
			// select active rows
			datatable.rows('.datatable-row-active');
			// check selected nodes
			if (datatable.nodes().length > 0) {
				// get column by field name and get the column nodes
				var value = datatable.columns('CompanyName').nodes().text();
				console.log(value);
			}
		});

		// record selection
		$('#kt_datatable_check').on('click', function() {
			var input = $('#kt_datatable_check_input').val();
			datatable.setActive(input);
		});

		$('#kt_datatable_check_all').on('click', function() {
			// datatable.setActiveAll(true);
			$('#kt_datatable').KTDatatable('setActiveAll', true);
		});

		$('#kt_datatable_uncheck_all').on('click', function() {
			// datatable.setActiveAll(false);
			$('#kt_datatable').KTDatatable('setActiveAll', false);
		});

		$('#kt_datatable_hide_column').on('click', function() {
			datatable.columns('ShipDate').visible(false);
		});

		$('#kt_datatable_show_column').on('click', function() {
			datatable.columns('ShipDate').visible(true);
		});

		$('#kt_datatable_remove_row').on('click', function() {
			datatable.rows('.datatable-row-active').remove();
		});

		$('#kt_datatable_search_status').on('change', function() {
			datatable.search($(this).val().toLowerCase(), 'Status');
		});

		$('#kt_datatable_search_type').on('change', function() {
			datatable.search($(this).val().toLowerCase(), 'Type');
		});

		$('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

	};

	return {
		// public functions
		init: function() {
            getUsers();
		},
	};
}();


var KTTrashedUsersTable = function() {
    // Private functions

    // basic demo
    var getUsers = function() {

        var URL = CHILD_URL != undefined ? CHILD_URL : "/api/datatables/demos/default.php";
        var options = {
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: HOST_URL + URL,
                    },
                },
                pageSize: 20, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },

            // layout definition
            layout: {
                scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                height: 550, // datatable's body's fixed height
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch'
            },

            // columns definition
            columns: [
                {
                    field: 'ID',
                    title: '#',
                    sortable: false,
                    type: 'number',
                    width: 30,
                    selector: true,
                    textAlign: 'center',
                    template: function(row) {
                        return row.RecordID;
                    },
                },
                {
                    field: 'id',
                    title: 'ID',
                    width: 30,
                    type: 'number',
                }, {
                    field: 'name',
                    title: 'Name',
                }, {
                    field: 'email',
                    title: 'Email',
                }, {
                    field: 'country_code',
                    title: 'Country',
                }, {
                    field: 'role',
                    title: 'Role',
                }, {
                    field: 'Actions',
                    title: 'Actions',
                    sortable: false,
                    width: 125,
                    overflow: 'visible',
                    autoHide: false,
                    template: function(row) {
                        return '<div class="dropdown dropdown-inline">\
								<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown">\
	                                <i class="la la-cog"></i>\
	                            </a>\
							</div>\
							<a href='+BASE_URL+'/user/edit/'+row.id+' class="btn btn-sm btn-clean btn-icon" title="Delete">\
								<i class="la la-edit"></i>\
							</a>\
							<button onclick="showConfirmRestore(\''+ row.id + '\' , \'' + row.name + '\' , \'' + row.email + '\' )" href='+BASE_URL+'user/edit/'+row.id+' class="btn btn-sm btn-clean btn-icon" title="Activate User">\
								<i class="la la-recycle"></i>\
							</button>\
						';
                    },
                }],

        };

        var datatable = $('#kt_datatable').KTDatatable(options);

        // both methods are supported
        // datatable.methodName(args); or $(datatable).KTDatatable(methodName, args);

        $('#kt_datatable_destroy').on('click', function() {
            // datatable.destroy();
            $('#kt_datatable').KTDatatable('destroy');
        });

        $('#kt_datatable_init').on('click', function() {
            datatable = $('#kt_datatable').KTDatatable(options);
        });

        $('#kt_datatable_reload').on('click', function() {
            // datatable.reload();
            $('#kt_datatable').KTDatatable('reload');
        });

        $('#kt_datatable_sort_asc').on('click', function() {
            datatable.sort('Status', 'asc');
        });

        $('#kt_datatable_sort_desc').on('click', function() {
            datatable.sort('Status', 'desc');
        });

        // get checked record and get value by column name
        $('#kt_datatable_get').on('click', function() {
            // select active rows
            datatable.rows('.datatable-row-active');
            // check selected nodes
            if (datatable.nodes().length > 0) {
                // get column by field name and get the column nodes
                var value = datatable.columns('CompanyName').nodes().text();
                console.log(value);
            }
        });

        // record selection
        $('#kt_datatable_check').on('click', function() {
            var input = $('#kt_datatable_check_input').val();
            datatable.setActive(input);
        });

        $('#kt_datatable_check_all').on('click', function() {
            // datatable.setActiveAll(true);
            $('#kt_datatable').KTDatatable('setActiveAll', true);
        });

        $('#kt_datatable_uncheck_all').on('click', function() {
            // datatable.setActiveAll(false);
            $('#kt_datatable').KTDatatable('setActiveAll', false);
        });

        $('#kt_datatable_hide_column').on('click', function() {
            datatable.columns('ShipDate').visible(false);
        });

        $('#kt_datatable_show_column').on('click', function() {
            datatable.columns('ShipDate').visible(true);
        });

        $('#kt_datatable_remove_row').on('click', function() {
            datatable.rows('.datatable-row-active').remove();
        });

        $('#kt_datatable_search_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_datatable_search_type').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

    };

    return {
        // public functions
        init: function() {
            getUsers();
        },
    };
}();


var showConfirmDelete = function(id, name, email, url){
    $( "#dialog-confirm" ).dialog({
        resizable: false,
        height: "auto",
        width: 400,
        modal: true,
        buttons: {
            "Inactive": function() {
                $( this ).dialog( "close" );
                window.location.href = BASE_URL +'/'+url+'/delete/'+id;
            },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        }
    });
}


var showConfirmRestore = function(id, name, email){
    $( "#dialog-confirm-restore" ).dialog({
        resizable: false,
        height: "auto",
        width: 400,
        modal: true,
        buttons: {
            "Active": function() {
                $( this ).dialog( "close" );
                window.location.href = BASE_URL +'/user/restore/'+id;
            },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        }
    });
}


//CLIENTS TABLE
var KTClientsTable = function() {
    // Private functions

    // basic demo
    var getUsers = function() {

        var URL = CHILD_URL != undefined ? CHILD_URL : "/api/datatables/demos/default.php";
        var options = {
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: HOST_URL + URL,
                    },
                },
                pageSize: 20, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },

            // layout definition
            layout: {
                scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                height: 550, // datatable's body's fixed height
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch'
            },

            // columns definition
            columns: [
                {
                    field: 'ID',
                    title: '#',
                    sortable: false,
                    type: 'number',
                    width: 30,
                    selector: true,
                    textAlign: 'center',
                    template: function(row) {
                        return row.RecordID;
                    },
                },
                {
                    field: 'id',
                    title: 'ID',
                    width: 30,
                    type: 'number',
                }, {
                    field: 'name',
                    title: 'Name',
                }, {
                    field: 'email',
                    title: 'Email',
                }, {
                    field: 'phone',
                    title: 'Phone',
                }, {
                    field: 'Actions',
                    title: 'Actions',
                    sortable: false,
                    width: 125,
                    overflow: 'visible',
                    autoHide: false,
                    template: function(row) {
                        return '<div class="dropdown dropdown-inline">\
								<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown">\
	                                <i class="la la-cog"></i>\
	                            </a>\
							</div>\
							<a href='+BASE_URL+'/client/edit/'+row.id+' class="btn btn-sm btn-clean btn-icon" title="Delete">\
								<i class="la la-edit"></i>\
							</a>\
							<button onclick="showConfirmDelete(\''+ row.id + '\' , \'' + row.name + '\' , \'' + row.email + '\' ,\'client\')" href='+BASE_URL+'user/edit/'+row.id+' class="btn btn-sm btn-clean btn-icon" title="InActive User">\
								<i class="la la-trash"></i>\
							</button>\
						';
                    },
                }],

        };

        var datatable = $('#kt_datatable').KTDatatable(options);

        // both methods are supported
        // datatable.methodName(args); or $(datatable).KTDatatable(methodName, args);

        $('#kt_datatable_destroy').on('click', function() {
            // datatable.destroy();
            $('#kt_datatable').KTDatatable('destroy');
        });

        $('#kt_datatable_init').on('click', function() {
            datatable = $('#kt_datatable').KTDatatable(options);
        });

        $('#kt_datatable_reload').on('click', function() {
            // datatable.reload();
            $('#kt_datatable').KTDatatable('reload');
        });

        $('#kt_datatable_sort_asc').on('click', function() {
            datatable.sort('Status', 'asc');
        });

        $('#kt_datatable_sort_desc').on('click', function() {
            datatable.sort('Status', 'desc');
        });

        // get checked record and get value by column name
        $('#kt_datatable_get').on('click', function() {
            // select active rows
            datatable.rows('.datatable-row-active');
            // check selected nodes
            if (datatable.nodes().length > 0) {
                // get column by field name and get the column nodes
                var value = datatable.columns('CompanyName').nodes().text();
                console.log(value);
            }
        });

        // record selection
        $('#kt_datatable_check').on('click', function() {
            var input = $('#kt_datatable_check_input').val();
            datatable.setActive(input);
        });

        $('#kt_datatable_check_all').on('click', function() {
            // datatable.setActiveAll(true);
            $('#kt_datatable').KTDatatable('setActiveAll', true);
        });

        $('#kt_datatable_uncheck_all').on('click', function() {
            // datatable.setActiveAll(false);
            $('#kt_datatable').KTDatatable('setActiveAll', false);
        });

        $('#kt_datatable_hide_column').on('click', function() {
            datatable.columns('ShipDate').visible(false);
        });

        $('#kt_datatable_show_column').on('click', function() {
            datatable.columns('ShipDate').visible(true);
        });

        $('#kt_datatable_remove_row').on('click', function() {
            datatable.rows('.datatable-row-active').remove();
        });

        $('#kt_datatable_search_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_datatable_search_type').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

    };

    return {
        // public functions
        init: function() {
            getUsers();
        },
    };
}();



//JOBS DATA
var KTJobsTable = function() {
    // Private functions

    var getJobs = function() {

        var URL = CHILD_URL != undefined ? CHILD_URL : "/api/datatables/demos/default.php";
        var options = {
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: HOST_URL + URL,
                    },
                },
                pageSize: 20, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },

            // layout definition
            layout: {
                scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                height: 550, // datatable's body's fixed height
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch'
            },

            // columns definition
            columns: [
                {
                    field: 'ID',
                    title: '#',
                    sortable: false,
                    type: 'number',
                    width: 30,
                    selector: true,
                    textAlign: 'center',
                    template: function(row) {
                        return row.RecordID;
                    },
                },
                {
                    field: 'company_name',
                    title: 'Company',
                    type: 'text',
                }, {
                    field: 'company_address',
                    title: 'Address',
                    type: 'text',
                }, {
                    field: 'title',
                    title: 'Title',
                }, {
                    field: 'created_at',
                    title: 'Created At',
                }, {
                    field: 'status',
                    title: 'Status',
                }, {
                    field: 'Actions',
                    title: 'Actions',
                    sortable: false,
                    width: 125,
                    overflow: 'visible',
                    autoHide: false,
                    template: function(row) {
                        return '<div class="dropdown dropdown-inline">\
								<a href='+BASE_URL+'/jobs/view/'+row.id+' class="btn btn-sm btn-clean btn-icon">\
	                                <i class="la la-eye"></i>\
	                            </a>\
							</div>\
							<a href='+BASE_URL+'/jobs/edit/'+row.id+' class="btn btn-sm btn-clean btn-icon" title="Delete">\
								<i class="la la-edit"></i>\
							</a>\
							<button onclick="showConfirmDelete(\''+ row.id + '\' , \'' + row.name + '\' , \'' + row.email + '\', \'jobs\' )" href='+BASE_URL+'job/edit/'+row.id+' class="btn btn-sm btn-clean btn-icon" title="InActive Job">\
								<i class="la la-trash"></i>\
							</button>\
						';
                    },
                }],

        };

        var datatable = $('#kt_datatable').KTDatatable(options);

        // both methods are supported
        // datatable.methodName(args); or $(datatable).KTDatatable(methodName, args);

        $('#kt_datatable_destroy').on('click', function() {
            // datatable.destroy();
            $('#kt_datatable').KTDatatable('destroy');
        });

        $('#kt_datatable_init').on('click', function() {
            datatable = $('#kt_datatable').KTDatatable(options);
        });

        $('#kt_datatable_reload').on('click', function() {
            // datatable.reload();
            $('#kt_datatable').KTDatatable('reload');
        });

        $('#kt_datatable_sort_asc').on('click', function() {
            datatable.sort('Status', 'asc');
        });

        $('#kt_datatable_sort_desc').on('click', function() {
            datatable.sort('Status', 'desc');
        });

        // get checked record and get value by column name
        $('#kt_datatable_get').on('click', function() {
            // select active rows
            datatable.rows('.datatable-row-active');
            // check selected nodes
            if (datatable.nodes().length > 0) {
                // get column by field name and get the column nodes
                var value = datatable.columns('CompanyName').nodes().text();
                console.log(value);
            }
        });

        // record selection
        $('#kt_datatable_check').on('click', function() {
            var input = $('#kt_datatable_check_input').val();
            datatable.setActive(input);
        });

        $('#kt_datatable_check_all').on('click', function() {
            // datatable.setActiveAll(true);
            $('#kt_datatable').KTDatatable('setActiveAll', true);
        });

        $('#kt_datatable_uncheck_all').on('click', function() {
            // datatable.setActiveAll(false);
            $('#kt_datatable').KTDatatable('setActiveAll', false);
        });

        $('#kt_datatable_hide_column').on('click', function() {
            datatable.columns('ShipDate').visible(false);
        });

        $('#kt_datatable_show_column').on('click', function() {
            datatable.columns('ShipDate').visible(true);
        });

        $('#kt_datatable_remove_row').on('click', function() {
            datatable.rows('.datatable-row-active').remove();
        });

        $('#kt_datatable_search_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_datatable_search_type').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

    };

    return {
        // public functions
        init: function() {
            getJobs();
        },
    };
}();