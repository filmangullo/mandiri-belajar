<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Menambah Slide</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('store.slide', $forum_id )}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="modal-body">
          <p>Selamat Menambah Slide Pertemuan/Forum anda..?<br /> slide yang akan anda tambahakan tidak berupa file yang langsung terbuka pada pertemuan melainkan harus di download terlebih dahulu, oleh user.</p>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Silde Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="slideX" name="slide" onchange="mySlide()" required>
              <label class="custom-file-label" for="slide"><span id="nameSlideX">Choose slide</span></label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
      </div>
      </form>
</div>

<script>
    function mySlide() {
      var xslide = document.getElementById("slideX").files[0].name;
      document.getElementById("nameSlideX").innerHTML = xslide;
    }

</script>
