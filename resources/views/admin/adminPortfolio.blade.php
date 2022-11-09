<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Создать портфолио</title>
        <link rel="icon" type="image/png" href="{{ asset('images/logo/logo.png') }}"/>
        <link href="https://fonts.googleapis.com/css2?family=TTCommons:wght@400;600;700&display=swap" rel="stylesheet">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
        <link rel="stylesheet" href={{ asset('css/design.css') }}>
        <script type="text/javascript">
            $(document).ready(function (){
                var dt = new DataTransfer();

                $('.input-file input[type=file]').on('change', function(){
                    let $files_list = $(this).closest('.input-file').next();
                    $files_list.empty();

                    for(var i = 0; i < this.files.length; i++){
                        let file = this.files.item(i);
                        dt.items.add(file);

                        let reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onloadend = function(){
                            let new_file_input = '<div class="input-file-list-item">' +
                                '<img class="input-file-list-img" src="' + reader.result + '">' +
                                '<span class="input-file-list-name">' + file.name + '</span>' +
                                '</div>';
                            $files_list.append(new_file_input);
                        }
                    };
                    this.files = dt.files;
                });

            })

        </script>
    </head>
    <body class="container d-flex justify-content-center row">
    @include('admin/adminHeader')
    <p class="marging-title"></p>
        <p class="fs-1">Добавить портфолио</p>
        <form class="user-form col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8 col-xxl-8 " method="post" enctype="multipart/form-data" action="{{route('create.portfolio')}}">
            @csrf
            <label for="categoryDataList" class="form-label">Категория</label>
            <input class="form-control" list="datalistOptions" id="categoryDataList" placeholder="Type to search..." name="category">
            <datalist id="datalistOptions">
                <option value="Дом">
                <option value="Квартира">
                <option value="Офис">
            </datalist>
            <div class="mb-3 row">
                <label for="inputName" class="col-sm-2 col-form-label">Название</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputOptions" class="col-sm-2 col-form-label">Описание</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputOptions" name="options">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputTag" class="col-sm-2 col-form-label">Тэг</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTag" name="tag">
                </div>
            </div>
            <div class="row">
                <div class="input-file-row">
                    <label class="input-file">
                        <input type="file" name="images" accept="image/*">
                        <span>Выберите главную картинку</span>
                    </label>
                    <div class="input-file-list"></div>
                </div>
            </div>
            <div class="row">
                <div class="input-file-row">
                    <label class="input-file">
                        <input type="file" name="main_images[]" multiple accept="image/*">
                        <span>Выберите картинки для галереи</span>
                    </label>
                    <div class="input-file-list"></div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
