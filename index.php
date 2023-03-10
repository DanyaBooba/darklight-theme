<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/index.css">

    <script>
        if (matchMedia('(prefers-color-scheme: dark)').media === 'not all') {
            document.documentElement.style.display = 'none';
            document.head.insertAdjacentHTML(
                'beforeend',
                '<link rel="stylesheet" href="/styles/light.css" onload="document.documentElement.style.display=\'\'">'
            );
        }
    </script>

    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" id="stylesheetlight" href="/styles/light.css" media="(prefers-color-scheme: light)">
    <link rel="stylesheet" id="stylesheetdark" href="/styles/dark.css" media="(prefers-color-scheme: dark)">
</head>

<body class="container">

    <div class="text-center mb-5">
        <div class="btn-group my-5" role="group" aria-label="Basic example">
            <button id="changethemelight" type="button" onClick="ButtonLight()" class="btn p-1 px-4" style="border-radius: 32px 0 0 32px">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="m-1 btn-icon" viewBox="0 0 16 16">
                    <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                </svg>
            </button>
            <button id="changethemeauto" type="button" onClick="ButtonAuto()" class="btn p-1 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="m-1 btn-icon" viewBox="0 0 16 16">
                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                </svg>
            </button>
            <button id="changethemedark" type="button" onClick="ButtonDark()" class="btn p-1 px-4" style="border-radius: 0 32px 32px 0">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="m-1 btn-icon" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                </svg>
            </button>
        </div>
    </div>

    <h1>???????????? ????????????????</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore repudiandae odit minima amet sit neque quidem cumque atque soluta, eveniet dolorum tempore! Consequuntur aspernatur est quod, ratione assumenda eos distinctio!</p>
    <div class="mb-3">
        <a href="#" class="link">
            ?????????? ???? ????????!
        </a>
    </div>
    <img src="/images/placeholder.jpeg" class="shadow">

    <script src="/index.js"></script>
</body>

</html>