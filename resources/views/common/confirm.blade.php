<input type="hidden" id="common_confirm_btn" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#common_confirm_model">
<div id="common_confirm_model" class="modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h5 class="modal-title"><i class="fa fa-exclamation-circle"></i> <span class="title"></span></h5>
            </div>
            <div class="modal-body small">
                <p ><span class="message"></span></p>
            </div>
            <div class="modal-footer" >
                <button type="button" class="btn btn-primary ok" data-dismiss="modal">确认</button>
                <button type="button" class="btn btn-default cancel" data-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script>
    function modalConfirm(message, url, title='提示'){
        Common.confirm({
              title: title,
              message: message,
              operate: function (reselt) {
                  if (reselt) {
                      window.location=url
                  } else {
                      return false
                  }
              }
          })
    }

    var Common = {
        confirm:function(params){
            var model = $("#common_confirm_model");
            model.find(".title").html(params.title)
            model.find(".message").html(params.message)

            $("#common_confirm_btn").click()
            //每次都将监听先关闭，防止多次监听发生，确保只有一次监听
            $(document).off('click','.modal-footer .ok')
            $(document).off('click','.modal-footer .cancel')
            $(document).on('click','.modal-footer .ok',function(){
                params.operate(true)
            })
            $(document).on('click','.modal-footer .cancel',function(){
                params.operate(false)
            })

        }
    }
</script>