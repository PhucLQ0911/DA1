<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">List user</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <!-- Data -->
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        List user
      </div>
      <div class="card-body">
        <table id="datatablesSimple">
          <thead>
            <tr>
              <th>
                <div class="text-center">ID</div>
              </th>
              <th>
                <div class="text-center">User name </div>
              </th>
              <th>
                <div class="text-center">Fullname</div>
              </th>
              <th>
                <div class="text-center">Phone</div>
              </th>
              <th>
                <div class="text-center">Email</div>
              </th>
              <th>
                <div class="text-center">Image</div>
              </th>
              <th>
                <div class="text-center">Address</div>
              </th>
              <th>
                <div class="text-center">Role</div>
              </th>
              <th>
                <div class="text-center">Action</div>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>username</td>
              <td>Fullname</td>
              <td>0123456789</td>
              <td>user@gmail.com</td>
              <td><img src="" alt="anh"></td>
              <td>Ha Noi</td>
              <td>User</td>
              <td>
                <div class="text-center">
                  <a href="?act=updateUser" class="btn btn-warning">Update</a>
                  <button class="btn btn-danger" data-bs-id="<?php echo $value['id']; ?>" data-bs-toggle="modal" data-bs-target="#modalDelete">
                    Delete
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