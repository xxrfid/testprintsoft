<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manage Product</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Panel</a></li>
            <li class="breadcrumb-item">Manage Product</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <div class="card order">
            <div class="card-header">
              <h3 class="card-title">Manage Product &nbsp;&nbsp;<button type="button" class="btn btn-sm btn-success btnaction add"><i class="fas fa-plus"></i>&nbsp; Add</button>&nbsp;&nbsp;<button type="button" class="btn btn-sm btn-primary btnaction calculator"><i class="fas fa-calculator"></i>&nbsp; Kalkulator</button></h3>
              <button id="refreshtabel" type="button" class="btn btn-default float-right btn-sm ">Refresh</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>-</th>
                    <th>-</th>
                    <th>-</th>
                    <th>-</th>
                    <th>-</th>
                    <th>-</th>
                    <th>-</th>
                  </tr>
                </thead>
                <tbody>

                  </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="overlay dark">
              <i class="fa-spin fas fa-3x fa-sync-alt"></i>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

  <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Product</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <input style="display: none;" type="txt" class="form-control" id="inputAct">
          <input style="display: none;" type="txt" class="form-control" id="inputId">
          <div class="form-group">
            <label for="inputName">Nama</label>
            <input type="txt" class="form-control" id="inputName" placeholder="Masukkan nama produk">
          </div>
          <div class="form-group">
            <label for="inputPrice">Harga Satuan</label>
            <input type="txt" class="form-control" id="inputPrice" placeholder="Masukkan harga satuan">
          </div>
          <div class="form-group">
            <label for="inputStock">Stock</label>
            <input type="txt" class="form-control" id="inputStock" placeholder="Masukkan stock">
          </div>
          <div class="form-group">
            <label for="inputType">Type Formula</label>
            <select id="inputType" class="form-control">
              <option value="">Select Type Formula...</option>
              <option value="unit">Unit (qty x price)</option>
              <option value="area">Area (qty x panjang x lebar x price)</option>
            </select>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary modalbtn">Save changes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.content -->

  <div class="modal fade" id="modal-calculator" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Kalkulator</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="txt" class="form-control" id="calcFormula" style="display:none">
          <input type="txt" class="form-control" id="calcPrice" style="display:none">
          <div class="form-group">
            <label for="inputTypeProduct">Produk</label>
            <select id="inputTypeProduct" class="form-control">
              <option value="">Select Product...</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputQuantity">Quantity</label>
            <input type="txt" class="form-control" id="inputQuantity" placeholder="Masukkan quantity">
          </div>
          <div class="form-group isareacalc">
            <label for="inputPanjang">Panjang</label>
            <input type="txt" class="form-control" id="inputPanjang" placeholder="Masukkan panjang">
          </div>
          <div class="form-group isareacalc">
            <label for="inputLebar">Lebar</label>
            <input type="txt" class="form-control" id="inputLebar" placeholder="Masukkan lebar">
          </div>
          <div class="form-group">
            <label for="inputHargaTotal">Harga</label>
            <input type="txt" class="form-control" id="inputHargaTotal" placeholder="harga total">
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<script>
  $(".btnaction.calculator").click(function() {
    var datatb = tabledata.data().toArray()
    var htmlsel = '<option value="">Select Product...</option>';
    for (i = 0; i < datatb.length; i++) {
      htmlsel += '<option value="' + datatb[i]['id'] + '" data-name="' + datatb[i]['name'] + '" data-type="' + datatb[i]['formula'] + '" data-price="' + datatb[i]['price'] + '">' + datatb[i]['name'] + ' (' + datatb[i]['id'] + ')</option>';
    }
    $('#inputTypeProduct').html(htmlsel);
    $('#modal-calculator').modal('show');
    $('#inputTypeProduct,#inputQuantity,#inputPanjang,#inputHargaTotal').val('').change();
    $('isareacalc').show();
  });

  $('#inputTypeProduct').on('change', function() {
    var selectedOption = $(this).find('option:selected');

    var selectedName = selectedOption.data('name');
    var selectedPrice = selectedOption.data('price');
    var selectedType = selectedOption.data('type');

    // Masukkan nilai ke input field lain (jika ada)
    $('#calcPrice').val(selectedPrice);
    $('#calcFormula').val(selectedType);

    if (selectedType == 'area') {
      $('.isareacalc').show();
    } else {
      $('.isareacalc').hide();
    }

    // Debug console (opsional)
    console.log('Price:', selectedPrice);
    console.log('Type:', selectedType);
  });

  function hitungHargaTotal() {
    var selected = $('#inputTypeProduct').find('option:selected');
    var type = selected.data('type');
    var price = parseFloat(selected.data('price')) || 0;

    var quantity = parseFloat($('#inputQuantity').val()) || 0;
    var panjang = parseFloat($('#inputPanjang').val()) || 0;
    var lebar = parseFloat($('#inputLebar').val()) || 0;

    var total = 0;

    if (type === 'unit') {
      total = quantity * price;
    } else if (type === 'area') {
      total = quantity * panjang * lebar * price;
    }

    $('#inputHargaTotal').val(total.toFixed(2));
  }

  // Trigger otomatis saat ada perubahan
  $('#inputTypeProduct, #inputQuantity, #inputPanjang, #inputLebar').on('input change', function() {
    hitungHargaTotal();
  });


  $(".btnaction.add").click(function() {
    $('.modalbtn').html('Tambahkan').removeClass('btn-warning').addClass('btn-primary');
    $('.modal-title').html('New Product');
    $('.form-group').show();
    $('#inputAct').val('1');
    $('#inputId').val('0');
    $('#inputName,#inputPrice,#inputStock,#inputType').val('').change();
    $('#modal-default').modal('show');
  });


  $("#example1").on("click", ".btnaction.edit", function() {
    $('#modal-default .modalbtn').html('Simpan Perubahan').removeClass('btn-primary').addClass('btn-warning');
    $('.modal-title').html('Edit Product');
    $('.form-group').show();
    $('.form-group.delete').hide();
    $('#inputAct').val('2');
    $('#inputId').val($(this).data('id'));
    $('#inputName,#inputPrice,#inputStock,#inputType').val('').change();
    Toast.fire({
      icon: 'info',
      title: '&nbsp&nbspMemuat Data Edit.'
    })
    $.ajax({
      url: "<?php echo base_url('product/getId/'); ?>" + $(this).data('id'),
      type: "GET",
      dataType: "json",
      success: function(result) {
        if (result && result.data) {
          $('#inputName').val(result.data.name);
          $('#inputPrice').val(result.data.price);
          $('#inputStock').val(result.data.stock);
          $('#inputType').val(result.data.formula).change();
          $('#modal-default').modal('show');
        } else {
          Toast.fire({
            icon: 'error',
            title: '&nbsp&nbspData tidak ditemukan.'
          })
        }
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
        Toast.fire({
          icon: 'error',
          title: '&nbsp&nbspTerjadi kesalahan saat mengambil data.'
        })
      }
    });

  });

  $("#example1").on("click", ".btnaction.delete", function() {
    $('#inputAct').val('3');
    $('#inputId').val($(this).data('id'));
    $('#inputName,#inputPrice,#inputStock,#inputType').val($(this).data('id')).change();
    $('#inputType').val('area').change();
    Swal.fire({
      title: 'Hapus, Apakah Anda yakin?',
      text: "Anda tidak akan dapat mengembalikan ini!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus ID: ' + $(this).data('id') + '!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.value == true) {
        excecutedata();
      }
    })
  });

  $(".modalbtn").click(function() {
    excecutedata();
  });

  function excecutedata() {
    var act = $("#inputAct").val();
    var uid = $("#inputId").val();
    var xname = $("#inputName").val();
    var xprice = $("#inputPrice").val();
    var xstock = $("#inputStock").val();
    var xtype = $("#inputType").val();

    if (act != "" && uid != "" && xname != "" && xprice != "" && xstock != "" && xtype != "") {
      var urlx;
      if (act == '3') {
        urlx = "<?php echo base_url(); ?>product/delete/" + uid;
      } else if (act == '2') {
        urlx = "<?php echo base_url(); ?>product/update/" + uid;
      } else {
        urlx = "<?php echo base_url(); ?>product/create";
      }

      $.ajax({
        url: urlx,
        type: 'POST',
        data: {
          name: xname,
          price: xprice,
          stock: xstock,
          formula: xtype
        },
        dataType: 'json',
        success: function(response) {
          if (response.status) {
            $("#modal-default").click();
            if (act == '3') {
              Toast.fire({
                icon: 'success',
                title: '&nbsp&nbsp Data Berhasil Di Hapus'
              })
            } else {
              Toast.fire({
                icon: 'success',
                title: '&nbsp&nbsp Berhasil Menyimpan Data.'
              })
            }
            setTimeout(function() {
              $('.overlay.dark').show();
              tabledata.ajax.reload(null, false);
            }, 1000);
          } else {
            Toast.fire({
              icon: 'warning',
              title: '&nbsp;&nbsp;' + (response.message || 'Kesalahan terjadi.')
            });
          }
        },
        error: function(xhr, status, error) {
          Toast.fire({
            icon: 'error',
            title: '&nbsp;&nbsp;Terjadi kesalahan koneksi.'
          });
          console.error(xhr.responseText);
        }
      });
    } else {
      Toast.fire({
        icon: 'info',
        title: '&nbsp&nbsp Inputan Tidak Boleh Kosong.'
      })
    }
  };

  $("#refreshtabel").click(function() {
    tabledata.ajax.reload();
  });

  var tabledata = $('#example1').DataTable({
    "pageLength": 10,
    "responsive": true,
    "autoWidth": false,
    "columns": [{
        "title": "ID",
        'data': 'id'
      },
      {
        "title": "Nama",
        'data': 'name'
      },
      {
        "title": "Harga",
        'data': 'price'
      },
      {
        "title": "Stok",
        'data': 'stock'
      },
      {
        "title": "Dibuat pada",
        'data': 'created_at'
      },
      {
        "title": "Formula",
        'data': 'formula'
      },
      {
        "title": "Action",
        searchable: false,
        orderable: false,
        render: function(data, type, full, meta) {
          return (
            '<div class="btn btn-info btn-sm btnaction edit" data-id="' + full['id'] + '" ><i class="fas fa-pencil-alt"></i>Edit</div> <div class="btn btn-danger btn-sm btnaction delete" data-id="' + full['id'] + '"><i class="fas fa-trash"></i>Delete</div> '
          );
        },
      }
    ],
    "ajax": '<?php echo base_url(); ?>product/getList',
    "order": [
      [0, "asc"]
    ],
    drawCallback: function() {
      $('.overlay.dark').hide();
    }
  });
</script>