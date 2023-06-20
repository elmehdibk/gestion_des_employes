<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Batter|@yield('page')</title>

    <!-- Fonts -->
    <link rel="icon"  href="{{asset('storage/batter/batter.png')}}"/>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="80" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><g/><clipPath id="489968940d"><path d="M 112.5 94.085938 L 251 94.085938 L 251 223 L 112.5 223 Z M 112.5 94.085938 " clip-rule="nonzero"/></clipPath><clipPath id="d105b4b1bc"><path d="M 209.085938 109.105469 C 208.980469 109.417969 208.945312 121.226562 208.953125 136.414062 L 187.886719 148.214844 L 187.886719 120.980469 Z M 173.035156 136.425781 L 173.035156 130.515625 L 164.722656 132.742188 L 157.707031 134.632812 L 156.488281 134.964844 L 142.355469 138.773438 L 142.355469 143.40625 L 157.109375 140.039062 Z M 173.035156 148.414062 L 173.035156 142.65625 L 164.601562 144.136719 L 157.496094 145.398438 L 156.269531 145.621094 L 142.355469 148.089844 L 142.355469 153.066406 L 157.097656 150.824219 Z M 173.035156 124.445312 L 173.035156 118.378906 L 164.847656 121.34375 L 157.917969 123.867188 L 156.710938 124.3125 L 142.355469 129.535156 L 142.355469 133.75 L 157.121094 129.257812 Z M 157.082031 161.601562 L 173.035156 160.398438 L 173.035156 154.792969 L 164.476562 155.535156 L 157.289062 156.164062 L 156.046875 156.273438 L 142.355469 157.472656 L 142.355469 162.664062 L 142.515625 162.714844 Z M 236.214844 121.140625 L 236.214844 181.707031 L 250.914062 188.335938 L 250.914062 138.972656 Z M 173.035156 112.457031 L 173.035156 106.242188 L 164.96875 109.949219 L 158.128906 113.101562 L 156.929688 113.65625 L 142.351562 120.371094 L 142.351562 124.09375 L 157.128906 118.480469 Z M 173.023438 100.460938 L 173.035156 94.105469 L 165.09375 98.554688 L 157.148438 103.007812 L 142.355469 111.296875 L 142.355469 114.4375 L 157.144531 107.695312 Z M 194.96875 186.976562 L 180.511719 190.152344 L 168.050781 192.890625 L 146.003906 197.734375 L 125.066406 202.332031 L 123.515625 202.671875 L 112.957031 204.992188 L 112.957031 207.226562 L 156.878906 200.976562 L 163.152344 200.082031 L 180.515625 197.609375 L 194.96875 195.550781 L 195.035156 195.558594 L 195.035156 186.960938 Z M 194.96875 171.039062 L 187.714844 173.566406 L 185.394531 174.375 L 180.511719 176.078125 L 179.1875 176.539062 L 136.515625 191.421875 L 123.511719 195.960938 L 112.957031 199.644531 L 112.957031 201.980469 L 123.511719 199.25 L 133.992188 196.546875 L 138.289062 195.433594 L 172.296875 186.652344 L 180.507812 184.53125 L 194.964844 180.800781 L 195.027344 180.8125 L 195.027344 171.0625 Z M 180.511719 203.925781 L 112.957031 209.464844 L 112.957031 211.59375 L 180.511719 210.410156 L 194.96875 210.152344 L 195.03125 210.15625 L 195.03125 202.738281 L 194.96875 202.742188 Z M 155.71875 166.929688 L 172.839844 172.394531 L 172.878906 172.378906 L 172.882812 170.652344 L 172.882812 168.789062 L 172.886719 166.925781 L 155.71875 166.925781 Z M 180.511719 215.601562 L 112.957031 213.578125 L 112.957031 215.597656 L 194.96875 222.941406 L 195.03125 222.9375 L 195.03125 216.039062 L 194.96875 216.035156 Z M 180.511719 215.601562 " clip-rule="nonzero"/></clipPath><linearGradient x1="342.592642" gradientTransform="matrix(0.236135, 0, 0, 0.236135, 112.500002, 94.105098)" y1="-26.316162" x2="277.585073" gradientUnits="userSpaceOnUse" y2="575.381791" id="c0f02e2a06"><stop stop-opacity="1" stop-color="rgb(77.661133%, 59.085083%, 22.087097%)" offset="0"/><stop stop-opacity="1" stop-color="rgb(77.615356%, 59.01947%, 22.03064%)" offset="0.103695"/><stop stop-opacity="1" stop-color="rgb(77.56958%, 58.953857%, 21.974182%)" offset="0.5"/><stop stop-opacity="1" stop-color="rgb(77.523804%, 58.886719%, 21.917725%)" offset="0.896305"/><stop stop-opacity="1" stop-color="rgb(77.478027%, 58.821106%, 21.861267%)" offset="1"/></linearGradient><clipPath id="38075bb020"><path d="M 123 94.085938 L 262.5 94.085938 L 262.5 223 L 123 223 Z M 123 94.085938 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#489968940d)"><g clip-path="url(#d105b4b1bc)"><path fill="url(#c0f02e2a06)" d="M 112.957031 94.105469 L 112.957031 222.941406 L 250.914062 222.941406 L 250.914062 94.105469 Z M 112.957031 94.105469 " fill-rule="nonzero"/></g></g><g clip-path="url(#38075bb020)"><path fill="#ffe5a6" d="M 219.355469 130.585938 L 209.089844 136.335938 L 209.089844 109.105469 L 219.355469 121.558594 Z M 173.035156 100.472656 L 187.714844 113.816406 L 187.714844 111.90625 L 173.035156 94.105469 Z M 173.035156 112.457031 L 187.714844 123.578125 L 187.714844 121.074219 L 173.035156 106.242188 Z M 173.035156 124.445312 L 187.714844 133.339844 L 187.714844 130.246094 L 173.035156 118.378906 Z M 173.035156 136.425781 L 187.714844 143.101562 L 187.714844 139.417969 L 173.035156 130.515625 Z M 173.035156 148.414062 L 182.445312 151.265625 L 187.429688 148.472656 L 173.03125 142.65625 L 173.03125 148.414062 Z M 173.035156 160.398438 L 180.511719 161.53125 L 180.511719 156.304688 L 173.035156 154.792969 Z M 172.886719 172.375 L 180.511719 169.175781 L 180.511719 166.925781 L 172.886719 166.925781 Z M 123.511719 193.09375 L 136.515625 187.636719 L 136.515625 160.800781 L 123.511719 170.40625 Z M 250.914062 192.480469 L 236.214844 186.84375 L 236.046875 186.78125 L 195.03125 171.0625 L 195.03125 180.8125 L 236.054688 191.773438 L 236.214844 191.816406 L 250.914062 195.742188 L 262.5 198.839844 L 262.5 196.921875 Z M 239.925781 197.789062 L 236.214844 196.894531 L 236.0625 196.859375 L 195.03125 186.960938 L 195.03125 195.5625 L 195.082031 195.554688 L 236.070312 201.582031 L 250.914062 203.765625 L 262.5 205.472656 L 262.5 203.234375 L 250.914062 200.441406 Z M 236.082031 206.828125 L 195.03125 202.734375 L 195.03125 210.152344 L 195.082031 210.152344 L 236.089844 211.027344 L 250.914062 211.34375 L 262.5 211.589844 L 262.5 209.460938 L 250.914062 208.308594 Z M 236.101562 215.261719 L 195.160156 216.039062 L 195.03125 216.035156 L 195.03125 222.9375 L 250.914062 217.269531 L 262.5 216.097656 L 262.5 214.761719 L 250.914062 214.984375 Z M 236.101562 215.261719 " fill-opacity="1" fill-rule="nonzero"/></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(127.266698, 268.009288)"><g><path d="M 3.0625 0 L 3.0625 -22.515625 L 9.484375 -22.515625 C 12.085938 -22.515625 14.160156 -22.070312 15.703125 -21.1875 C 17.242188 -20.300781 18.015625 -18.972656 18.015625 -17.203125 C 18.015625 -15.953125 17.578125 -14.867188 16.703125 -13.953125 C 15.835938 -13.035156 14.625 -12.335938 13.0625 -11.859375 C 15.125 -11.472656 16.679688 -10.773438 17.734375 -9.765625 C 18.785156 -8.765625 19.3125 -7.660156 19.3125 -6.453125 C 19.3125 -5.253906 19.003906 -4.226562 18.390625 -3.375 C 17.773438 -2.53125 16.992188 -1.878906 16.046875 -1.421875 C 14.117188 -0.472656 12.144531 0 10.125 0 Z M 6.359375 -12.203125 L 8.8125 -12.203125 C 10.875 -12.203125 12.351562 -12.660156 13.25 -13.578125 C 14.144531 -14.492188 14.59375 -15.644531 14.59375 -17.03125 C 14.59375 -17.957031 14.28125 -18.800781 13.65625 -19.5625 C 13.03125 -20.320312 12.070312 -20.894531 10.78125 -21.28125 C 9.238281 -21.28125 7.765625 -21.054688 6.359375 -20.609375 Z M 6.359375 -11.21875 L 6.359375 -1.53125 C 7.085938 -1.300781 8.207031 -1.1875 9.71875 -1.1875 C 11.238281 -1.1875 12.585938 -1.601562 13.765625 -2.4375 C 14.941406 -3.28125 15.53125 -4.445312 15.53125 -5.9375 C 15.53125 -7.4375 14.882812 -8.691406 13.59375 -9.703125 C 12.300781 -10.710938 10.75 -11.21875 8.9375 -11.21875 Z M 6.359375 -11.21875 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(149.160194, 268.009288)"><g><path d="M 0.34375 0 L 10.4375 -23.046875 L 10.953125 -23.046875 L 21.046875 0 L 17.34375 0 L 14.796875 -6.125 L 4.6875 -6.125 L 2.171875 0 Z M 5.203125 -7.40625 L 14.25 -7.40625 L 9.765625 -18.421875 Z M 5.203125 -7.40625 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(170.543741, 268.009288)"><g><path d="M 10.75 0 L 7.453125 0 L 7.453125 -20.875 C 6.679688 -21.050781 5.910156 -21.140625 5.140625 -21.140625 L 0.546875 -20.09375 L 0.34375 -22.515625 L 17.84375 -22.515625 L 17.6875 -20.09375 L 13.0625 -21.140625 C 12.289062 -21.140625 11.519531 -21.050781 10.75 -20.875 Z M 10.75 0 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(188.731652, 268.009288)"><g><path d="M 10.75 0 L 7.453125 0 L 7.453125 -20.875 C 6.679688 -21.050781 5.910156 -21.140625 5.140625 -21.140625 L 0.546875 -20.09375 L 0.34375 -22.515625 L 17.84375 -22.515625 L 17.6875 -20.09375 L 13.0625 -21.140625 C 12.289062 -21.140625 11.519531 -21.050781 10.75 -20.875 Z M 10.75 0 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(206.919562, 268.009288)"><g><path d="M 3.0625 0 L 3.0625 -22.515625 L 16.6875 -22.515625 L 16.359375 -20.234375 L 10.03125 -21.28125 C 8.914062 -21.28125 7.691406 -21.085938 6.359375 -20.703125 L 6.359375 -12.4375 L 13.90625 -12.4375 L 13.90625 -11.15625 L 6.359375 -11.15625 L 6.359375 -1.21875 L 16.890625 -2.28125 L 16.5625 0 Z M 3.0625 0 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(226.025369, 268.009288)"><g><path d="M 6.390625 -10.75 L 6.390625 0 L 3.0625 0 L 3.0625 -22.515625 L 10.40625 -22.515625 C 12.695312 -22.515625 14.570312 -22.003906 16.03125 -20.984375 C 17.488281 -19.960938 18.21875 -18.617188 18.21875 -16.953125 C 18.21875 -15.285156 17.632812 -13.96875 16.46875 -13 C 15.300781 -12.039062 13.722656 -11.378906 11.734375 -11.015625 L 20.84375 0 L 16.890625 0.46875 L 9.015625 -10.75 Z M 6.390625 -11.765625 L 8.5625 -11.765625 C 12.644531 -11.765625 14.6875 -13.375 14.6875 -16.59375 C 14.6875 -17.132812 14.550781 -17.742188 14.28125 -18.421875 C 13.757812 -19.847656 12.648438 -20.789062 10.953125 -21.25 C 9.410156 -21.25 7.890625 -21.054688 6.390625 -20.671875 Z M 6.390625 -11.765625 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(77.023472, 288.685137)"><g><path d="M 3.09375 -1.4375 C 3.09375 -1.71875 3.015625 -1.929688 2.859375 -2.078125 C 2.710938 -2.234375 2.4375 -2.382812 2.03125 -2.53125 C 1.632812 -2.675781 1.328125 -2.828125 1.109375 -2.984375 C 0.898438 -3.140625 0.742188 -3.316406 0.640625 -3.515625 C 0.535156 -3.722656 0.484375 -3.957031 0.484375 -4.21875 C 0.484375 -4.664062 0.632812 -5.035156 0.9375 -5.328125 C 1.238281 -5.617188 1.628906 -5.765625 2.109375 -5.765625 C 2.441406 -5.765625 2.738281 -5.6875 3 -5.53125 C 3.257812 -5.382812 3.457031 -5.175781 3.59375 -4.90625 C 3.738281 -4.644531 3.8125 -4.359375 3.8125 -4.046875 L 3.09375 -4.046875 C 3.09375 -4.398438 3.007812 -4.671875 2.84375 -4.859375 C 2.675781 -5.054688 2.429688 -5.15625 2.109375 -5.15625 C 1.828125 -5.15625 1.601562 -5.070312 1.4375 -4.90625 C 1.28125 -4.75 1.203125 -4.523438 1.203125 -4.234375 C 1.203125 -3.992188 1.285156 -3.789062 1.453125 -3.625 C 1.628906 -3.46875 1.898438 -3.320312 2.265625 -3.1875 C 2.816406 -3.007812 3.210938 -2.785156 3.453125 -2.515625 C 3.703125 -2.242188 3.828125 -1.890625 3.828125 -1.453125 C 3.828125 -0.984375 3.675781 -0.609375 3.375 -0.328125 C 3.070312 -0.0546875 2.664062 0.078125 2.15625 0.078125 C 1.820312 0.078125 1.515625 0.00390625 1.234375 -0.140625 C 0.953125 -0.285156 0.726562 -0.488281 0.5625 -0.75 C 0.40625 -1.007812 0.328125 -1.3125 0.328125 -1.65625 L 1.046875 -1.65625 C 1.046875 -1.300781 1.144531 -1.023438 1.34375 -0.828125 C 1.539062 -0.628906 1.8125 -0.53125 2.15625 -0.53125 C 2.46875 -0.53125 2.703125 -0.609375 2.859375 -0.765625 C 3.015625 -0.929688 3.09375 -1.15625 3.09375 -1.4375 Z M 3.09375 -1.4375 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(83.816003, 288.685137)"><g><path d="M 3.9375 -5.078125 L 2.4375 -5.078125 L 2.4375 0 L 1.734375 0 L 1.734375 -5.078125 L 0.234375 -5.078125 L 0.234375 -5.6875 L 3.9375 -5.6875 Z M 3.9375 -5.078125 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(90.628065, 288.685137)"><g><path d="M 3.34375 -2.625 L 1.328125 -2.625 L 1.328125 -0.609375 L 3.671875 -0.609375 L 3.671875 0 L 0.609375 0 L 0.609375 -5.6875 L 3.640625 -5.6875 L 3.640625 -5.078125 L 1.328125 -5.078125 L 1.328125 -3.25 L 3.34375 -3.25 Z M 3.34375 -2.625 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(97.248721, 288.685137)"><g/></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(101.728753, 288.685137)"><g><path d="M 0.609375 0 L 0.609375 -5.6875 L 1.96875 -5.6875 C 2.632812 -5.6875 3.148438 -5.476562 3.515625 -5.0625 C 3.878906 -4.644531 4.0625 -4.0625 4.0625 -3.3125 L 4.0625 -2.359375 C 4.0625 -1.609375 3.875 -1.023438 3.5 -0.609375 C 3.132812 -0.203125 2.597656 0 1.890625 0 Z M 1.328125 -5.078125 L 1.328125 -0.609375 L 1.90625 -0.609375 C 2.40625 -0.609375 2.769531 -0.753906 3 -1.046875 C 3.238281 -1.335938 3.359375 -1.765625 3.359375 -2.328125 L 3.359375 -3.328125 C 3.359375 -3.929688 3.242188 -4.375 3.015625 -4.65625 C 2.785156 -4.9375 2.4375 -5.078125 1.96875 -5.078125 Z M 1.328125 -5.078125 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(108.943159, 288.685137)"><g><path d="M 3.34375 -2.625 L 1.328125 -2.625 L 1.328125 -0.609375 L 3.671875 -0.609375 L 3.671875 0 L 0.609375 0 L 0.609375 -5.6875 L 3.640625 -5.6875 L 3.640625 -5.078125 L 1.328125 -5.078125 L 1.328125 -3.25 L 3.34375 -3.25 Z M 3.34375 -2.625 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(115.563815, 288.685137)"><g/></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(120.043846, 288.685137)"><g><path d="M 0.609375 0 L 0.609375 -5.6875 L 2.234375 -5.6875 C 2.753906 -5.6875 3.144531 -5.5625 3.40625 -5.3125 C 3.664062 -5.0625 3.796875 -4.679688 3.796875 -4.171875 C 3.796875 -3.910156 3.726562 -3.675781 3.59375 -3.46875 C 3.46875 -3.269531 3.289062 -3.113281 3.0625 -3 C 3.320312 -2.914062 3.523438 -2.753906 3.671875 -2.515625 C 3.828125 -2.273438 3.90625 -1.984375 3.90625 -1.640625 C 3.90625 -1.128906 3.765625 -0.726562 3.484375 -0.4375 C 3.203125 -0.144531 2.804688 0 2.296875 0 Z M 1.328125 -2.65625 L 1.328125 -0.609375 L 2.3125 -0.609375 C 2.582031 -0.609375 2.796875 -0.695312 2.953125 -0.875 C 3.109375 -1.0625 3.1875 -1.316406 3.1875 -1.640625 C 3.1875 -2.316406 2.898438 -2.65625 2.328125 -2.65625 Z M 1.328125 -3.265625 L 2.25 -3.265625 C 2.5 -3.265625 2.695312 -3.347656 2.84375 -3.515625 C 3 -3.679688 3.078125 -3.898438 3.078125 -4.171875 C 3.078125 -4.484375 3.003906 -4.710938 2.859375 -4.859375 C 2.722656 -5.003906 2.515625 -5.078125 2.234375 -5.078125 L 1.328125 -5.078125 Z M 1.328125 -3.265625 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(127.055127, 288.685137)"><g><path d="M 3.265625 -1.484375 L 1.34375 -1.484375 L 0.90625 0 L 0.171875 0 L 2 -5.6875 L 2.609375 -5.6875 L 4.453125 0 L 3.71875 0 Z M 1.53125 -2.109375 L 3.078125 -2.109375 L 2.3125 -4.6875 Z M 1.53125 -2.109375 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(134.312502, 288.685137)"><g><path d="M 3.9375 -5.078125 L 2.4375 -5.078125 L 2.4375 0 L 1.734375 0 L 1.734375 -5.078125 L 0.234375 -5.078125 L 0.234375 -5.6875 L 3.9375 -5.6875 Z M 3.9375 -5.078125 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(141.124565, 288.685137)"><g><path d="M 1.359375 0 L 0.640625 0 L 0.640625 -5.6875 L 1.359375 -5.6875 Z M 1.359375 0 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(145.772565, 288.685137)"><g><path d="M 1.53125 -5.6875 L 3.015625 -1.046875 L 4.5 -5.6875 L 5.421875 -5.6875 L 5.421875 0 L 4.71875 0 L 4.71875 -2.21875 L 4.78125 -4.4375 L 3.296875 0 L 2.75 0 L 1.265625 -4.421875 L 1.328125 -2.21875 L 1.328125 0 L 0.609375 0 L 0.609375 -5.6875 Z M 1.53125 -5.6875 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(154.463533, 288.685137)"><g><path d="M 3.34375 -2.625 L 1.328125 -2.625 L 1.328125 -0.609375 L 3.671875 -0.609375 L 3.671875 0 L 0.609375 0 L 0.609375 -5.6875 L 3.640625 -5.6875 L 3.640625 -5.078125 L 1.328125 -5.078125 L 1.328125 -3.25 L 3.34375 -3.25 Z M 3.34375 -2.625 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(161.08419, 288.685137)"><g><path d="M 4.328125 0 L 3.609375 0 L 1.328125 -4.390625 L 1.328125 0 L 0.609375 0 L 0.609375 -5.6875 L 1.328125 -5.6875 L 3.625 -1.28125 L 3.625 -5.6875 L 4.328125 -5.6875 Z M 4.328125 0 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(168.685314, 288.685137)"><g><path d="M 3.9375 -5.078125 L 2.4375 -5.078125 L 2.4375 0 L 1.734375 0 L 1.734375 -5.078125 L 0.234375 -5.078125 L 0.234375 -5.6875 L 3.9375 -5.6875 Z M 3.9375 -5.078125 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(175.497377, 288.685137)"><g/></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(179.977408, 288.685137)"><g><path d="M 3.34375 -2.625 L 1.328125 -2.625 L 1.328125 -0.609375 L 3.671875 -0.609375 L 3.671875 0 L 0.609375 0 L 0.609375 -5.6875 L 3.640625 -5.6875 L 3.640625 -5.078125 L 1.328125 -5.078125 L 1.328125 -3.25 L 3.34375 -3.25 Z M 3.34375 -2.625 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(186.598064, 288.685137)"><g><path d="M 3.9375 -5.078125 L 2.4375 -5.078125 L 2.4375 0 L 1.734375 0 L 1.734375 -5.078125 L 0.234375 -5.078125 L 0.234375 -5.6875 L 3.9375 -5.6875 Z M 3.9375 -5.078125 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(193.410127, 288.685137)"><g/></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(197.890158, 288.685137)"><g><path d="M 0.609375 0 L 0.609375 -5.6875 L 1.96875 -5.6875 C 2.632812 -5.6875 3.148438 -5.476562 3.515625 -5.0625 C 3.878906 -4.644531 4.0625 -4.0625 4.0625 -3.3125 L 4.0625 -2.359375 C 4.0625 -1.609375 3.875 -1.023438 3.5 -0.609375 C 3.132812 -0.203125 2.597656 0 1.890625 0 Z M 1.328125 -5.078125 L 1.328125 -0.609375 L 1.90625 -0.609375 C 2.40625 -0.609375 2.769531 -0.753906 3 -1.046875 C 3.238281 -1.335938 3.359375 -1.765625 3.359375 -2.328125 L 3.359375 -3.328125 C 3.359375 -3.929688 3.242188 -4.375 3.015625 -4.65625 C 2.785156 -4.9375 2.4375 -5.078125 1.96875 -5.078125 Z M 1.328125 -5.078125 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(205.104564, 288.685137)"><g><path d="M 3.34375 -2.625 L 1.328125 -2.625 L 1.328125 -0.609375 L 3.671875 -0.609375 L 3.671875 0 L 0.609375 0 L 0.609375 -5.6875 L 3.640625 -5.6875 L 3.640625 -5.078125 L 1.328125 -5.078125 L 1.328125 -3.25 L 3.34375 -3.25 Z M 3.34375 -2.625 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(211.72522, 288.685137)"><g/></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(216.205252, 288.685137)"><g><path d="M 3.9375 -5.078125 L 2.4375 -5.078125 L 2.4375 0 L 1.734375 0 L 1.734375 -5.078125 L 0.234375 -5.078125 L 0.234375 -5.6875 L 3.9375 -5.6875 Z M 3.9375 -5.078125 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(223.017314, 288.685137)"><g><path d="M 3.34375 -2.625 L 1.328125 -2.625 L 1.328125 -0.609375 L 3.671875 -0.609375 L 3.671875 0 L 0.609375 0 L 0.609375 -5.6875 L 3.640625 -5.6875 L 3.640625 -5.078125 L 1.328125 -5.078125 L 1.328125 -3.25 L 3.34375 -3.25 Z M 3.34375 -2.625 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(229.63797, 288.685137)"><g><path d="M 2.328125 -2.296875 L 1.328125 -2.296875 L 1.328125 0 L 0.609375 0 L 0.609375 -5.6875 L 2.203125 -5.6875 C 2.765625 -5.6875 3.1875 -5.539062 3.46875 -5.25 C 3.757812 -4.957031 3.90625 -4.535156 3.90625 -3.984375 C 3.90625 -3.628906 3.828125 -3.320312 3.671875 -3.0625 C 3.515625 -2.800781 3.296875 -2.601562 3.015625 -2.46875 L 4.109375 -0.046875 L 4.109375 0 L 3.34375 0 Z M 1.328125 -2.921875 L 2.203125 -2.921875 C 2.503906 -2.921875 2.742188 -3.015625 2.921875 -3.203125 C 3.097656 -3.398438 3.1875 -3.660156 3.1875 -3.984375 C 3.1875 -4.710938 2.851562 -5.078125 2.1875 -5.078125 L 1.328125 -5.078125 Z M 1.328125 -2.921875 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(236.532064, 288.685137)"><g><path d="M 2.328125 -2.296875 L 1.328125 -2.296875 L 1.328125 0 L 0.609375 0 L 0.609375 -5.6875 L 2.203125 -5.6875 C 2.765625 -5.6875 3.1875 -5.539062 3.46875 -5.25 C 3.757812 -4.957031 3.90625 -4.535156 3.90625 -3.984375 C 3.90625 -3.628906 3.828125 -3.320312 3.671875 -3.0625 C 3.515625 -2.800781 3.296875 -2.601562 3.015625 -2.46875 L 4.109375 -0.046875 L 4.109375 0 L 3.34375 0 Z M 1.328125 -2.921875 L 2.203125 -2.921875 C 2.503906 -2.921875 2.742188 -3.015625 2.921875 -3.203125 C 3.097656 -3.398438 3.1875 -3.660156 3.1875 -3.984375 C 3.1875 -4.710938 2.851562 -5.078125 2.1875 -5.078125 L 1.328125 -5.078125 Z M 1.328125 -2.921875 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(243.426158, 288.685137)"><g><path d="M 3.265625 -1.484375 L 1.34375 -1.484375 L 0.90625 0 L 0.171875 0 L 2 -5.6875 L 2.609375 -5.6875 L 4.453125 0 L 3.71875 0 Z M 1.53125 -2.109375 L 3.078125 -2.109375 L 2.3125 -4.6875 Z M 1.53125 -2.109375 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(250.683543, 288.685137)"><g><path d="M 3.09375 -1.4375 C 3.09375 -1.71875 3.015625 -1.929688 2.859375 -2.078125 C 2.710938 -2.234375 2.4375 -2.382812 2.03125 -2.53125 C 1.632812 -2.675781 1.328125 -2.828125 1.109375 -2.984375 C 0.898438 -3.140625 0.742188 -3.316406 0.640625 -3.515625 C 0.535156 -3.722656 0.484375 -3.957031 0.484375 -4.21875 C 0.484375 -4.664062 0.632812 -5.035156 0.9375 -5.328125 C 1.238281 -5.617188 1.628906 -5.765625 2.109375 -5.765625 C 2.441406 -5.765625 2.738281 -5.6875 3 -5.53125 C 3.257812 -5.382812 3.457031 -5.175781 3.59375 -4.90625 C 3.738281 -4.644531 3.8125 -4.359375 3.8125 -4.046875 L 3.09375 -4.046875 C 3.09375 -4.398438 3.007812 -4.671875 2.84375 -4.859375 C 2.675781 -5.054688 2.429688 -5.15625 2.109375 -5.15625 C 1.828125 -5.15625 1.601562 -5.070312 1.4375 -4.90625 C 1.28125 -4.75 1.203125 -4.523438 1.203125 -4.234375 C 1.203125 -3.992188 1.285156 -3.789062 1.453125 -3.625 C 1.628906 -3.46875 1.898438 -3.320312 2.265625 -3.1875 C 2.816406 -3.007812 3.210938 -2.785156 3.453125 -2.515625 C 3.703125 -2.242188 3.828125 -1.890625 3.828125 -1.453125 C 3.828125 -0.984375 3.675781 -0.609375 3.375 -0.328125 C 3.070312 -0.0546875 2.664062 0.078125 2.15625 0.078125 C 1.820312 0.078125 1.515625 0.00390625 1.234375 -0.140625 C 0.953125 -0.285156 0.726562 -0.488281 0.5625 -0.75 C 0.40625 -1.007812 0.328125 -1.3125 0.328125 -1.65625 L 1.046875 -1.65625 C 1.046875 -1.300781 1.144531 -1.023438 1.34375 -0.828125 C 1.539062 -0.628906 1.8125 -0.53125 2.15625 -0.53125 C 2.46875 -0.53125 2.703125 -0.609375 2.859375 -0.765625 C 3.015625 -0.929688 3.09375 -1.15625 3.09375 -1.4375 Z M 3.09375 -1.4375 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(257.476064, 288.685137)"><g><path d="M 3.09375 -1.4375 C 3.09375 -1.71875 3.015625 -1.929688 2.859375 -2.078125 C 2.710938 -2.234375 2.4375 -2.382812 2.03125 -2.53125 C 1.632812 -2.675781 1.328125 -2.828125 1.109375 -2.984375 C 0.898438 -3.140625 0.742188 -3.316406 0.640625 -3.515625 C 0.535156 -3.722656 0.484375 -3.957031 0.484375 -4.21875 C 0.484375 -4.664062 0.632812 -5.035156 0.9375 -5.328125 C 1.238281 -5.617188 1.628906 -5.765625 2.109375 -5.765625 C 2.441406 -5.765625 2.738281 -5.6875 3 -5.53125 C 3.257812 -5.382812 3.457031 -5.175781 3.59375 -4.90625 C 3.738281 -4.644531 3.8125 -4.359375 3.8125 -4.046875 L 3.09375 -4.046875 C 3.09375 -4.398438 3.007812 -4.671875 2.84375 -4.859375 C 2.675781 -5.054688 2.429688 -5.15625 2.109375 -5.15625 C 1.828125 -5.15625 1.601562 -5.070312 1.4375 -4.90625 C 1.28125 -4.75 1.203125 -4.523438 1.203125 -4.234375 C 1.203125 -3.992188 1.285156 -3.789062 1.453125 -3.625 C 1.628906 -3.46875 1.898438 -3.320312 2.265625 -3.1875 C 2.816406 -3.007812 3.210938 -2.785156 3.453125 -2.515625 C 3.703125 -2.242188 3.828125 -1.890625 3.828125 -1.453125 C 3.828125 -0.984375 3.675781 -0.609375 3.375 -0.328125 C 3.070312 -0.0546875 2.664062 0.078125 2.15625 0.078125 C 1.820312 0.078125 1.515625 0.00390625 1.234375 -0.140625 C 0.953125 -0.285156 0.726562 -0.488281 0.5625 -0.75 C 0.40625 -1.007812 0.328125 -1.3125 0.328125 -1.65625 L 1.046875 -1.65625 C 1.046875 -1.300781 1.144531 -1.023438 1.34375 -0.828125 C 1.539062 -0.628906 1.8125 -0.53125 2.15625 -0.53125 C 2.46875 -0.53125 2.703125 -0.609375 2.859375 -0.765625 C 3.015625 -0.929688 3.09375 -1.15625 3.09375 -1.4375 Z M 3.09375 -1.4375 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(264.268585, 288.685137)"><g><path d="M 3.34375 -2.625 L 1.328125 -2.625 L 1.328125 -0.609375 L 3.671875 -0.609375 L 3.671875 0 L 0.609375 0 L 0.609375 -5.6875 L 3.640625 -5.6875 L 3.640625 -5.078125 L 1.328125 -5.078125 L 1.328125 -3.25 L 3.34375 -3.25 Z M 3.34375 -2.625 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(270.889231, 288.685137)"><g><path d="M 1.53125 -5.6875 L 3.015625 -1.046875 L 4.5 -5.6875 L 5.421875 -5.6875 L 5.421875 0 L 4.71875 0 L 4.71875 -2.21875 L 4.78125 -4.4375 L 3.296875 0 L 2.75 0 L 1.265625 -4.421875 L 1.328125 -2.21875 L 1.328125 0 L 0.609375 0 L 0.609375 -5.6875 Z M 1.53125 -5.6875 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(279.580189, 288.685137)"><g><path d="M 3.34375 -2.625 L 1.328125 -2.625 L 1.328125 -0.609375 L 3.671875 -0.609375 L 3.671875 0 L 0.609375 0 L 0.609375 -5.6875 L 3.640625 -5.6875 L 3.640625 -5.078125 L 1.328125 -5.078125 L 1.328125 -3.25 L 3.34375 -3.25 Z M 3.34375 -2.625 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(286.200835, 288.685137)"><g><path d="M 4.328125 0 L 3.609375 0 L 1.328125 -4.390625 L 1.328125 0 L 0.609375 0 L 0.609375 -5.6875 L 1.328125 -5.6875 L 3.625 -1.28125 L 3.625 -5.6875 L 4.328125 -5.6875 Z M 4.328125 0 "/></g></g></g><g fill="#d7af4d" fill-opacity="1"><g transform="translate(293.80195, 288.685137)"><g><path d="M 3.9375 -5.078125 L 2.4375 -5.078125 L 2.4375 0 L 1.734375 0 L 1.734375 -5.078125 L 0.234375 -5.078125 L 0.234375 -5.6875 L 3.9375 -5.6875 Z M 3.9375 -5.078125 "/></g></g></g></svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
