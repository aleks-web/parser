<!-- Start Удалить по окончанию  -->
<div class="verstka"></div>
<style>
    .verstka {
        position:fixed;
        z-index: 1000;
        top: 0;
        right: 0;
        width: max-content;
        height: 25px;
        opacity: 0.4;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .verstka:before {
        content: '';
        width: 100%;
        height: 100%;
        font-size: 14px;
        padding: 0 5px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @media (min-width: 0) {
        .verstka:before {
            content: 'def (0)';
            background: black;
            color: white;
        }
    }
    @media (min-width: 320px) {
        .verstka:before {
            content: 's (320)';
            background: red;
            color: white;
        }
    }
    @media (min-width: 576px) {
        .verstka:before {
            content: 'sm (576)';
            background-color: #558000;
        }
    }
    @media (min-width: 768px) {
        .verstka:before {
            content: 'md (768)';
            color: black;
            background-color: yellow;
        }
    }
    @media (min-width: 1024px) {
        .verstka:before {
            content: 'lg (1024)';
            color: white;
            background-color: darkred;
        }
    }
    @media (min-width: 1536px) {
        .verstka:before {
            content: 'xl (1536)';
            color: white;
            background-color: blue;
        }
    }
    @media (min-width: 1836px) {
        .verstka:before {
            content: '2xl (1920)';
            color: white;
            background-color: var(--main-clr);
        }
    }
</style>
<!-- End -->