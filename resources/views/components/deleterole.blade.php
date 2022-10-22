<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalPromoLabel2" aria-hidden="true" data-tor-parent="show">
    <div class="modal-dialog modal-dialog-centered no-transform">
      <div class="modal-content" data-tor="show(p):{scale.from(75) fade.in} quad">

        <form action="{{ url('/role-delete')}}" method="POST">
            @csrf
            @method('POST')
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Role</h5>
              </div>
              <div class="modal-body">
                <input type="hidden" name="id" id="ids">
                <h4>Are you sure you want to delete?</h4>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">close</button>
                <button type="submit" class="btn btn-danger" >Delete</button>
              </div>

        </form>

      </div>
    </div>
  </div>
  <!-- end model-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.deleteBtn').click(function (e){
        e.preventDefault();
        var id= $(this).val();
        $('#ids').val(id);
        $('#deleteModal').modal('show');
      });
    });
  </script>
