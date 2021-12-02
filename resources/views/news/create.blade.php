@extends('layouts.app')
@section('title', 'Hír létrehozása')
@section('content')

<section id="content">
    <div class="container">
        @include('admin.sidebar')
        <div class="col">
            <h3 class="mb-4">Hír létrehozás</h3>
            <form action="{{ route('admin.news.store') }}" method="post" class="row">
                @csrf

                <div class="form-group col-6">
                    <label for="title">Cím</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                    @error('title') <span class="text-sm text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group col-6">
                    <label for="slug">URL cím</label>
                    <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') }}" readonly>
                    @error('slug') <span class="text-sm text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group col-12">
                    <div class="text-muted">Szöveg bemásolása formázás nélkül: CTRL + SHIFT + V</div>
                    @error('body') <span class="text-sm text-danger">{{ $message }}</span> @enderror
                    <textarea type="text" name="body" id="body">{{ old('body') }}</textarea>
                </div>

                <!--<div class="form-check ml-3 mb-4">
                    <input type="checkbox" name="email" id="email" class="form-check-input">
                    <label for="email" class="form-check-label">Email küldése az összes ügyfélnek a hírről</label>
                </div>-->

                <div class="form-group col-12">
                    <button class="button button-reveal button-medium button-rounded tright"><i class="icon-angle-right"></i><span>Létrehozás</span></button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
@section('js')
<script src="{{ asset('js/components/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('js/components/tinymce/icons/default/icons.min.js') }}"></script>

<script>
$(document).ready(function() {
    $("#title").keyup(function () {
        if($(this).val() != "") {
            var d = new Date();
            var month = ("0" + (d.getMonth() + 1)).slice(-2);
            var date = ("0" + d.getDate()).slice(-2);
            var strDate = d.getFullYear() + " " + month + " " + date;
            $("#slug").val(url_slug(strDate + " " + $(this).val()));
        }else {
            $("#slug").val('');
        }
    });

    var files = <?php echo json_encode($files); ?>;
    var url = "http://valorg.hu/file/";
    var links = [];

    files.forEach(function (v) {
        links.push({
            title: v,
            value: url + v
        });
    });

    tinymce.init({
        selector: 'textarea',
        language: 'hu_HU',
        plugins: 'link table lists print preview',
        toolbar: 'undo redo | styleselect fontsizeselect | bold italic underline| alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor | table link | print preview',
        link_list: links,
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        height: 500,
    });

    function convertToSlug(Text) {
        return Text
            .toLowerCase()
            .replace(/[^a-zA-Z0-9\s]/g,"")
            .replace(/ +/g, '-');
    }

    function url_slug(s, opt) {
        s = String(s);
        opt = Object(opt);

        var defaults = {
            'delimiter': '-',
            'limit': undefined,
            'lowercase': true,
            'replacements': {},
            'transliterate': (typeof(XRegExp) === 'undefined') ? true : false
        };

        // Merge options
        for (var k in defaults) {
            if (!opt.hasOwnProperty(k)) {
                opt[k] = defaults[k];
            }
        }

        var char_map = {
            // Latin
            'À': 'A', 'Á': 'A', 'Â': 'A', 'Ã': 'A', 'Ä': 'A', 'Å': 'A', 'Æ': 'AE', 'Ç': 'C',
            'È': 'E', 'É': 'E', 'Ê': 'E', 'Ë': 'E', 'Ì': 'I', 'Í': 'I', 'Î': 'I', 'Ï': 'I',
            'Ð': 'D', 'Ñ': 'N', 'Ò': 'O', 'Ó': 'O', 'Ô': 'O', 'Õ': 'O', 'Ö': 'O', 'Ő': 'O',
            'Ø': 'O', 'Ù': 'U', 'Ú': 'U', 'Û': 'U', 'Ü': 'U', 'Ű': 'U', 'Ý': 'Y', 'Þ': 'TH',
            'ß': 'ss',
            'à': 'a', 'á': 'a', 'â': 'a', 'ã': 'a', 'ä': 'a', 'å': 'a', 'æ': 'ae', 'ç': 'c',
            'è': 'e', 'é': 'e', 'ê': 'e', 'ë': 'e', 'ì': 'i', 'í': 'i', 'î': 'i', 'ï': 'i',
            'ð': 'd', 'ñ': 'n', 'ò': 'o', 'ó': 'o', 'ô': 'o', 'õ': 'o', 'ö': 'o', 'ő': 'o',
            'ø': 'o', 'ù': 'u', 'ú': 'u', 'û': 'u', 'ü': 'u', 'ű': 'u', 'ý': 'y', 'þ': 'th',
            'ÿ': 'y'
        };

        // Make custom replacements
        for (var k in opt.replacements) {
            s = s.replace(RegExp(k, 'g'), opt.replacements[k]);
        }

        // Transliterate characters to ASCII
        if (opt.transliterate) {
            for (var k in char_map) {
                s = s.replace(RegExp(k, 'g'), char_map[k]);
            }
        }

        // Replace non-alphanumeric characters with our delimiter
        var alnum = (typeof(XRegExp) === 'undefined') ? RegExp('[^a-z0-9]+', 'ig') : XRegExp('[^\\p{L}\\p{N}]+', 'ig');
        s = s.replace(alnum, opt.delimiter);

        // Remove duplicate delimiters
        s = s.replace(RegExp('[' + opt.delimiter + ']{2,}', 'g'), opt.delimiter);

        // Truncate slug to max. characters
        s = s.substring(0, opt.limit);

        // Remove delimiter from ends
        s = s.replace(RegExp('(^' + opt.delimiter + '|' + opt.delimiter + '$)', 'g'), '');

        return opt.lowercase ? s.toLowerCase() : s;
    }
});
</script>
@endsection
