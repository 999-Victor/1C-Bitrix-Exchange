<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");?>

<div class="exchange-loader"></div>
<h1>Обмен</h1>
<div class="exchange">
    <div class="tabs">
        <input type="radio" id="main" name="tab" checked>
        <label for="main" class="tab">
            Обмен
        </label>
        <input type="radio" id="settings" name="tab">
        <label for="settings" class="tab">
            Основные настройки
        </label>
        <input type="radio" id="security" name="tab">
        <label for="security" class="tab">
            Настройки безопасности
        </label>
    </div>
    <div class="wrapper">
        <div class="sections">
            <section data-section="main">
                <!-- ajax -->
            </section>
            <section data-section="settings">
                <!-- ajax -->
            </section>
            <section data-section="security">
                <!-- ajax -->
            </section>
        </div>
        <div class="logs">
            логи
        </div>
    </div>
</div>

<link rel="stylesheet" href="src/main.css">
<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");