
            <div class="modal fade" id="myModal">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <!-- Modal Header -->
                  @if(Auth::check())
                    <div class="modal-header">
                      <h4 class="modal-title">Succfull</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                  @else
                    <div class="modal-header">
                      <h4 class="modal-title">Warning</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                      You need login or register
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Login</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  @endif
                </div>
              </div>
            </div>