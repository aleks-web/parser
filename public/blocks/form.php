<?php

?>

<div class="gsap-block sm:container my-10 s:px-[0.5rem] lg:my-16 xl:max-w-[1536px] 2xl:static 2xl:my-20 2xl:mb-32 relative z-20">

    <div class="main-form bg-white p-3 rounded-xl relative z-20 sm:p-6 xl:p-10">

        <div class="mb-5 text-center text-[18px] uppercase text-[#1450D0] font-bold italic break-all
                s:text-[22px]
                sm:text-[28px]
                md:text-[32px]
                lg:text-[36px]
                xl:text-[40px]
                2xl:text-[44px]">Заполните форму</div>

        <form method="POST">
            <?php
            $label = "text-[#1450D0] font-bold text-[14px] mb-[5px] block sm:text-[16px] xl:text-[18px] group-has-[.error]:text-[#d13a32] group-has-[.success]:text-[#259525]";
            $input = "border border-[#D9D9D9] outline-none py-1 pl-4 rounded-[20px] text-[14px] w-full text-[#1450D0]
                      group-has-[.error]:text-[#d13a32] group-has-[.error]:border-[#d13a32] group-has-[.success]:border-[#259525] group-has-[.success]:text-[#259525] group-has-[.error]:placeholder-[#d13a32]
                      s:text-[16px]
                      md:py-2
                      lg:pl-6
                      xl:text-[20px]";
            ?>

            <div class="flex flex-col gap-4 mb-4
                    lg:flex-row">
                <div class="w-full group">
                    <span class="<?= $label ?>">Введите имя *</span>
                    <input class="<?= $input ?>" type="text" name="username" placeholder="Ваше имя">
                </div>

                <div class="w-full group">
                    <span class="<?= $label ?>">Введите телефон *</span>
                    <input class="<?= $input ?>" type="text" name="phone" placeholder="+7 (___) - ___ - __ - __">
                </div>

                <div class="w-full group">
                    <span class="<?= $label ?>">Введите E-mail *</span>
                    <input class="<?= $input ?>" type="email" name="email" placeholder="E-mail">
                </div>
            </div>

            <div class="flex flex-col">
                <span class="<?= $label ?>">Сбор данных*</span>

                <div class="flex flex-col gap-2">
                    <?php $checkClass = "relative flex items-center justify-start min-w-10 w-10 bg-[#5A575F] rounded-[20px] p-[4px] transition-all delay-100 ease-in
                                         xl:min-w-12 xl:w-12 xl:p-[6px]
                                         group-has-[input:checked]/checkbox:bg-[#1450D0] group-has-[input:checked]/checkbox:justify-end"; ?>

                    <div class="group-checkbox">
                        <input class="group-checkbox-input" type="hidden" name="data-collect" checked value="period">

                        <div class="group/checkbox checkbox flex items-center gap-3 text-[#5A575F] break-all cursor-pointer">
                            <div class="<?= $checkClass ?>">
                                <input class="absolute w-full h-full left-0 right-0 opacity-0 cursor-pointer" type="checkbox" value="period" checked>
                                <div class="aspect-square w-[14px] bg-white rounded-full xl:w-[16px] transition-all"></div>
                            </div>

                            <span class="group-has-[input:checked]/checkbox:text-[--main-clr] text-[14px] s:text-[16px] xl:text-[20px]">Периодический</span>
                        </div>

                        <div class="group/checkbox checkbox flex items-center gap-3 text-[#5A575F] break-all cursor-pointer">
                            <div class="<?= $checkClass ?>">
                                <input class="absolute w-full h-full left-0 right-0 opacity-0 cursor-pointer" type="checkbox" value="raz">
                                <div class="aspect-square w-[14px] bg-white rounded-full xl:w-[16px] transition-all"></div>
                            </div>

                            <span class="group-has-[input:checked]/checkbox:text-[--main-clr] text-[14px] s:text-[16px] xl:text-[20px]">Разовый</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col-reverse gap-6 mt-3">
                <div class="group">
                    <span class="<?= $label ?>">Какие данные нужно собирать?*</span>
                    <textarea class="<?= $input ?> pl-2 rounded-lg text-[13px] s:text-[16px] s:rounded-[16px] lg:rounded-[20px] min-h-[100px]" rows="5" name="message" placeholder="Например: текст, изображения, описание товаров, характеристики"></textarea>
                </div>

                <div class="mt-6 bg-[#F2F6FF] rounded-lg p-4 text-center break-all flex flex-col items-center s:rounded-[16px] md:p-6 lg:rounded-[20px]">

                    <div class="flex flex-col items-center justify-center gap-2 s:flex-row">
                        <svg class="min-w-[20px] w-[20px] aspect-square"><use xlink:href="#svg-blue-info-triangle"></use></svg>
                        <div class="text-[16px] text-[#1450D0] font-bold lg:text-[20px]">Распишите подробности</div>
                    </div>

                    <ul class="flex flex-col gap-2 text-[#5A575F] text-[14px] text-left mt-2 s:text-[15px] lg:text-[16px]">
                        <?php $svgInList = "aspect-square w-3 p-1 box-content bg-white rounded-full"; ?>
                        <li class="flex items-center gap-2">
                            <svg class="<?= $svgInList ?>"><use xlink:href="#svg-blue-check-mark"></use></svg>
                            <span>ссылки на сайты, которые вам нужно парсить</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="<?= $svgInList ?>"><use xlink:href="#svg-blue-check-mark"></use></svg>
                            <span>какие именно данные нужно собирать</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="<?= $svgInList ?>"><use xlink:href="#svg-blue-check-mark"></use></svg>
                            <span>нужен разовый или периодический сбор данных</span>
                        </li>
                    </ul>

                    <div class="bg-white font-bold text-[14px] text-[#5A575F] p-2 rounded-lg mt-4 text-left break-keep max-w-[500px] xl:text-[16px]">
                        Чем больше подробностей, тем лучше. После отправки формы наши специалисты сразу же проанализируют вашу заявку, рассчитают стоимость – и мы свяжемся с вами с полностью готовым просчёто.
                    </div>

                </div>
            </div>

            <button type="submit" class="m-auto bg-[#1450D0] text-[#C6D8FF] text-[clamp(10px,_8svw,_24px)] max-text-size py-2 px-10 rounded-full font-bold uppercase flex items-center gap-3 w-full justify-center mt-2
                                     s:w-auto
                                     sm:mt-[20px]
                                     lg:text-[28px] lg:py-4 lg:px-14 lg:mt-[30px]
                                     xl:mt-[40px]">
                <span>Отправить</span>
                <svg class="aspect-square min-w-[10px] max-w-[20px] w-[7svw]"><use xlink:href="#svg-arrow-up"></use></svg>
            </button>
        </form>

    </div>

    <div class="main-form-success flex-col items-center justify-center p-5 bg-white my-[20svh] rounded-[20px] max-w-max mx-auto hidden">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 16 16" class="p-2 rounded-full border-2 border-[#44bf44] fill-[#44bf44]">
            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
        </svg>

        <div class="mt-5 text-[20px]">Ваше сообщение успешно отправлено!</div>
    </div>
</div>

<script>
    const form = document.querySelector('form');
    const fields = form.querySelectorAll('[name="username"], [name="phone"], [name="email"], [name="message"]');
    const phoneInputNode = form.querySelector('[name="phone"]');


    let isFirstInput = 0;
    const mask = IMask(phoneInputNode, {
        mask: '+{7} (000) 000-00-00',
        commit: (text) => {

            if (isFirstInput >= 2) {
                checkLengthField(phoneInputNode, 17);
            } else {
                isFirstInput++;
            }
        }
    });

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        checkFormFields();
        const errors = form.querySelectorAll('.error');

        if (errors.length > 0) {
            window.scrollTo(0, errors[0].offsetTop);
            return;
        }

        fetch('/pages/order-parsing/handleForm.php', {
            method: 'POST',
            body: JSON.stringify(getFormObject(this))
        }).then(r => { return r.text() }).then(r => {
            if (r.success) {
                document.querySelector('.main-form').style.display = 'none';
                document.querySelector('.main-form-success').style.display = 'flex';
                window.scrollTo(0, document.querySelector('.main-form-success').offsetTop);
            }
        });
    });

    function getFormObject(form) {
        const formData = new FormData(form);

        let formObject = {};
        formData.forEach((value, key) => {
            formObject[key] = value;
        });

        return formObject;
    }



    function checkFormFields() {
        mask.updateValue();
        let username = form.querySelector('[name="username"]');
        let email = form.querySelector('[name="email"]');
        let message = form.querySelector('[name="message"]');

        checkLengthField(username);
        checkLengthField(email);
        checkLengthField(message, 20);
    }

    function checkLengthField(inputNode, length = 0) {
        if (inputNode.value.length <= length) {
            inputNode.classList.add('error');
            inputNode.classList.remove('success');
        } else {
            inputNode.classList.remove('error');
            inputNode.classList.add('success');
        }
    }

    fields.forEach(inputField => {
        inputField.addEventListener('keyup', () => { checkFormFields(); })
    });
</script>