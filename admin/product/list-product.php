<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">List products</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <!-- Data -->
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        List Product
      </div>
      <div class="card-body">
        <table id="datatablesSimple">
          <thead>
            <tr>
              <th>ID</th>
              <th>Category name</th>
              <th>Product name</th>
              <th>Image</th>
              <th>Price</th>
              <th>Status</th>
              <th>Description</th>
              <th>Date create</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>


            <tr>
              <td>1</td>
              <td>Smartphone</td>
              <td>Iphone</td>
              <td><img src="" alt="anh..."></td>
              <td>$1999</td>
              <td>Show</td>
              <td>Iphone new generation</td>
              <td>23/11/2023</td>
              <td>
                <a href="?act=updateProduct" class="btn btn-warning">Update</a>
                <button class="btn btn-danger" data-bs-id="<?php echo $value['id']; ?>" data-bs-toggle="modal" data-bs-target="#modalDelete">
                  Delete
                </button>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>


<!-- Confirm delete -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDeleteLabel">Thông báo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hành động này không thể hoàn tác. Bạn có muốn xóa không?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <a href="" class="btn btn-danger" id="btn-delete">Xác nhận xóa</a>
      </div>
    </div>
  </div>
</div>


<script>
  var modalDelete = document.getElementById('modalDelete')
  modalDelete.addEventListener('show.bs.modal', function(event) {
    var button = event.relatedTarget
    var id = button.getAttribute('data-bs-id')
    var link = `?act=deleteUser&idUser=${id}`
    document.getElementById("btn-delete").setAttribute("href", link)
  })
</script>