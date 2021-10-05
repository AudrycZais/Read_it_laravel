<!DOCTYPE html>
<html lang="en">
  <head>
    @include('template.partials._head')
  </head>
  <body data-baseURL="{{ url('/')}}">

	  @include('template.partials._nav')
    <!-- END nav -->

    @include('template.partials._header')

   @include('template.partials._main')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      @include('template.partials._footer')
    </footer>



  @include('template.partials._loader')

  @include('template.partials._script')

  </body>
</html>
