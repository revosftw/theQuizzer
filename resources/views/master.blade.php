<html>
  <head>

  </head>
  <body>

    @include('layouts.partials._navigation')

    @include('layouts.partials._header')

    @yeild('content')

    @include('layouts.partials._footer')

  </body>
</html>
