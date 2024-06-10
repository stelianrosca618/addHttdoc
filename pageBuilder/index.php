<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./../templates/lt_medical/css/default.css" />
  <link rel="stylesheet" href="./../templates/lt_medical/css/template.css" />
  <script src="./../templates//lt_medical/js/jquery.sticky.js"></script>
</head>

<body>
  <style>
    #container {
      width: 1000px;
      margin: 20px auto;
    }

    .ck-editor__editable[role="textbox"] {
      /* Editing area */
      min-height: 200px;
    }

    .image {
      /* Block images */
      max-width: 80%;
      margin: 20px auto;
    }
  </style>
  <div id="sp-header-sticky-wrapper" class="sticky-wrapper" style="height: 90px; position:relative;">
    <header id="sp-header">
      <div class="container">
        <div class="row" style="position: relative;">
          <div id="sp-logo" class="col-8 col-lg-2 d-none">
            <div class="sp-column ">
              <div class="logo"><a href="/"><img class="sp-default-logo" src="/templates/lt_medical/images/presets/preset4/logo.png" alt="GOZ - Gecertificeerd Onderhoud Zorgsector"><img class="sp-retina-logo" src="/templates/lt_medical/images/presets/preset4/logo@2x.png" alt="GOZ - Gecertificeerd Onderhoud Zorgsector" width="1" height="1"></a></div>
            </div>
          </div>
          <div id="sp-menu" class="col-4 col-lg-10 " style="position: static;">
            <div class="sp-column ">
              <div class="sp-megamenu-wrapper">
                <a id="offcanvas-toggler" href="#"><i class="fa fa-bars"></i></a>
                <ul class="sp-megamenu-parent menu-fade hidden-sm hidden-xs">
                  <li class="sp-menu-item current-item active"><a href="/index.php">Home</a></li>
                  <li class="sp-menu-item sp-has-child"><a href="javascript:void(0);">Voor zorginstellingen</a>
                    <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
                      <div class="sp-dropdown-inner">
                        <ul class="sp-dropdown-items">
                          <li class="sp-menu-item"><a href="/index.php/voor-zorginstellingen/goz-in-2-minuten">GOZ in 2 minuten</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-zorginstellingen/kies-voor-gecertificeerd-onderhoud">Kies voor gecertificeerd onderhoud</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-zorginstellingen/onderhoud-medische-technologie-volgens-het-convenant">Onderhoud medische technologie volgens het convenant</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-zorginstellingen/regelgeving">MDR regelgeving</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-zorginstellingen/beeldmerk">Beeldmerk</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-zorginstellingen/uniform-pasjes-systeem">Uniform pasjes systeem</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-zorginstellingen/aivg-sso">AIVG &amp; SSO</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="sp-menu-item sp-has-child"><a href="javascript:void(0);">Voor bedrijven</a>
                    <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
                      <div class="sp-dropdown-inner">
                        <ul class="sp-dropdown-items">
                          <li class="sp-menu-item"><a href="/index.php/voor-bedrijven/wat-is-goz">Wat is GOZ?</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-bedrijven/goz-in-2-minuten-2">GOZ in 2 minuten</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-bedrijven/waarom">Waarom?</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-bedrijven/voor-wie">Voor wie?</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-bedrijven/uniform-pasjes-systeem">Uniform pasjes systeem</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-bedrijven/kosten">Overzicht kosten</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-bedrijven/deelnameformulier">Deelnameformulier</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-bedrijven/gebruik-van-het-beeldmerk">Gebruik van het beeldmerk</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-bedrijven/onderhoud-medische-technologie-volgens-het-convenant">Het convenant</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-bedrijven/eisen-organisatie">GOZ Toetsingscriteria Organisatie</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-bedrijven/eisen-technicus">GOZ Toetsingscriteria Technici</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-bedrijven/toelatingsprocedure">Toelatingsprocedure</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-bedrijven/documenten">Overzicht documenten</a></li>
                          <li class="sp-menu-item"><a href="/index.php/voor-bedrijven/aivg-sso">AIVG &amp; SSO</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="sp-menu-item sp-has-child"><a href="javascript:void(0);">Stichting GOZ</a>
                    <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
                      <div class="sp-dropdown-inner">
                        <ul class="sp-dropdown-items">
                          <li class="sp-menu-item"><a href="/index.php/stichting-bbo/contactgegevens">Contactgegevens</a></li>
                          <li class="sp-menu-item"><a href="/index.php/stichting-bbo/organisatie">Organisatie GOZ</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="sp-menu-item"><a href="/index.php/laatste-nieuws">Laatste nieuws</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>

  <div id="container">
    <h1>Comapony Page Builder</h1>
    <div class="row">
      <div class="col-12">
        <div class="form-group row py-2">
          <label for="staticEmail" class="col-sm-2 col-form-label float-right">Page Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="staticEmail" placeholder="Page title">
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="form-group row py-2">
          <label for="staticEmail" class="col-sm-2 col-form-label float-right">Page link</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="staticEmail" placeholder="Page link">
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="form-group py-2">
          <label for="staticEmail" class="col-form-label">Company Name</label>
          <input type="text" readonly class="form-control" id="staticEmail" placeholder="Company Name">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group py-2">
          <label for="staticEmail" class="col-form-label">Page Status</label>
          <input type="text" readonly class="form-control" id="staticEmail" placeholder="Page Status">
        </div>
      </div>
    </div>

    <div id="editor">
    </div>
    <div class="row mt-3 float-right">
      <button type="button" class="btn btn-success mx-1">Save</button>
      <button type="button" class="btn btn-danger mx-1">Cancel</button>
    </div>
  </div>

  <!--
            The "superbuild" of CKEditor&nbsp;5 served via CDN contains a large set of plugins and multiple editor types.
            See https://ckeditor.com/docs/ckeditor5/latest/installation/getting-started/quick-start.html#running-a-full-featured-editor-from-cdn
        -->
  <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/super-build/ckeditor.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script>
    // This sample still does not showcase all CKEditor&nbsp;5 features (!)
    // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.

    CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
      // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
      toolbar: {
        items: [
          'exportPDF', 'exportWord', '|',
          'findAndReplace', 'selectAll', '|',
          'heading', '|',
          'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
          'bulletedList', 'numberedList', 'todoList', '|',
          'outdent', 'indent', '|',
          'undo', 'redo',
          '-',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
          'alignment', '|',
          'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
          'specialCharacters', 'horizontalLine', 'pageBreak', '|',
          'textPartLanguage', '|',
          'sourceEditing'
        ],
        shouldNotGroupWhenFull: true
      },
      // Changing the language of the interface requires loading the language file using the <script> tag.
      // language: 'es',
      list: {
        properties: {
          styles: true,
          startIndex: true,
          reversed: true
        }
      },

      heading: {
        options: [{
            model: 'paragraph',
            title: 'Paragraph',
            class: 'ck-heading_paragraph'
          },
          {
            model: 'heading1',
            view: 'h1',
            title: 'Heading 1',
            class: 'ck-heading_heading1'
          },
          {
            model: 'heading2',
            view: 'h2',
            title: 'Heading 2',
            class: 'ck-heading_heading2'
          },
          {
            model: 'heading3',
            view: 'h3',
            title: 'Heading 3',
            class: 'ck-heading_heading3'
          },
          {
            model: 'heading4',
            view: 'h4',
            title: 'Heading 4',
            class: 'ck-heading_heading4'
          },
          {
            model: 'heading5',
            view: 'h5',
            title: 'Heading 5',
            class: 'ck-heading_heading5'
          },
          {
            model: 'heading6',
            view: 'h6',
            title: 'Heading 6',
            class: 'ck-heading_heading6'
          }
        ]
      },
      // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
      placeholder: 'Page Content',
      // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
      fontFamily: {
        options: [
          'default',
          'Arial, Helvetica, sans-serif',
          'Courier New, Courier, monospace',
          'Georgia, serif',
          'Lucida Sans Unicode, Lucida Grande, sans-serif',
          'Tahoma, Geneva, sans-serif',
          'Times New Roman, Times, serif',
          'Trebuchet MS, Helvetica, sans-serif',
          'Verdana, Geneva, sans-serif'
        ],
        supportAllValues: true
      },
      // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
      fontSize: {
        options: [10, 12, 14, 'default', 18, 20, 22],
        supportAllValues: true
      },
      // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
      // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
      htmlSupport: {
        allow: [{
          name: /.*/,
          attributes: true,
          classes: true,
          styles: true
        }]
      },
      // Be careful with enabling previews
      // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
      htmlEmbed: {
        showPreviews: true
      },
      // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
      link: {
        decorators: {
          addTargetToExternalLinks: true,
          defaultProtocol: 'https://',
          toggleDownloadable: {
            mode: 'manual',
            label: 'Downloadable',
            attributes: {
              download: 'file'
            }
          }
        }
      },
      // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
      mention: {
        feeds: [{
          marker: '@',
          feed: [
            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
            '@sugar', '@sweet', '@topping', '@wafer'
          ],
          minimumCharacters: 1
        }]
      },
      // The "superbuild" contains more premium features that require additional configuration, disable them below.
      // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
      removePlugins: [
        // These two are commercial, but you can try them out without registering to a trial.
        // 'ExportPdf',
        // 'ExportWord',
        'AIAssistant',
        'CKBox',
        'CKFinder',
        'EasyImage',
        // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
        // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
        // Storing images as Base64 is usually a very bad idea.
        // Replace it on production website with other solutions:
        // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
        // 'Base64UploadAdapter',
        'MultiLevelList',
        'RealTimeCollaborativeComments',
        'RealTimeCollaborativeTrackChanges',
        'RealTimeCollaborativeRevisionHistory',
        'PresenceList',
        'Comments',
        'TrackChanges',
        'TrackChangesData',
        'RevisionHistory',
        'Pagination',
        'WProofreader',
        // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
        // from a local file system (file://) - load this site via HTTP server if you enable MathType.
        'MathType',
        // The following features are part of the Productivity Pack and require additional license.
        'SlashCommand',
        'Template',
        'DocumentOutline',
        'FormatPainter',
        'TableOfContents',
        'PasteFromOfficeEnhanced',
        'CaseChange'
      ]
    });
  </script>
</body>

</html>