@php
  $date = date('D, d M Y');
@endphp
<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
      <div class="row">
        <div class="credits ml-auto">
          <span class="copyright">
            © <script>
              document.write(new Date().getFullYear())
            </script>, made by <b>Yogi Evan Dwi Kristantyo - 72200389; Yonathan Fabiano - 72200396</b><br>
            Date {{$date}}
          </span>
        </div>
      </div>
    </div>
</footer>