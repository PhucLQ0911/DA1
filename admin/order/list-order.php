<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">List order</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <!-- Data -->
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        List order
      </div>
      <div class="card-body">
        <table id="datatablesSimple">
          <thead>
            <tr>
              <th>ID</th>
              <th>Full name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Payment</th>
              <th>Date buy</th>
              <th>Order status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Full name</td>
              <td>Address</td>
              <td>Phone</td>
              <td>Email</td>
              <td>Payment</td>
              <td>Date buy</td>
              <td>Order status</td>
              <td class="text-center">
                <div class="text-center">
                  <a href="?act=detailOrder" class="btn btn-primary">
                    View Detail
                  </a>

                  <button class="btn btn-success" data-bs-id="<?php echo $value['id']; ?>" data-bs-toggle="modal" data-bs-target="#modalConfirm">
                    Confirm
                  </button>
                  <button class="btn btn-danger" data-bs-id="<?php echo $value['id']; ?>" data-bs-toggle="modal" data-bs-target="#modalRefuse">
                    Refuse
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>


<!-- Confirm refuse -->
<div class="modal fade" id="modalRefuse" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDeleteLabel">Thông báo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Bạn có muốn huỷ đơn hàng không?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <a href="" class="btn btn-danger" id="btn-delete">Xác nhận huỷ</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalConfirm" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDeleteLabel">Thông báo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Bạn có muốn xác nhận đơn hàng không?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <a href="" class="btn btn-danger" id="btn-delete">Xác nhận đơn</a>
      </div>
    </div>
  </div>
</div>

<script>
  var modalRefuse = document.getElementById('modalRefuse')
  modalDelete.addEventListener('show.bs.modal', function(event) {
    var button = event.relatedTarget
    var id = button.getAttribute('data-bs-id')
    var link = `?act=refuseOrder&idOrder=${id}`
    document.getElementById("btn-delete").setAttribute("href", link)
  })

  var modalConfirm = document.getElementById('modalConfirm')
  modalDelete.addEventListener('show.bs.modal', function(event) {
    var button = event.relatedTarget
    var id = button.getAttribute('data-bs-id')
    var link = `?act=confirmOrder&idOrder=${id}`
    document.getElementById("btn-delete").setAttribute("href", link)
  })
</script>