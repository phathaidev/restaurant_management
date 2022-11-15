  @include("admin.header")
  <base href="/public">
  <body>
    <div class="container-scroller">
    
      {{-- Include sidebar --}}
      @include("admin.sidebar")

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        {{-- Include navbar --}}
        @include("admin.navbar")

        <div class="main-panel">
        @yield("content")
        </div>

      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
   @include("admin.footer")