<?php include "svg.php"; ?>


<!-- Start Удалить по окончанию  -->
<div class="verstka"></div>
<style>
    .verstka {
        position:fixed;
        top: 0;
        right: 0;
        width: 25px;
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
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @media (min-width: 0) {
        .verstka:before {
            content: 'def';
            background: black;
            color: white;
        }
    }
    @media (min-width: 576px) {
        .verstka:before {
            content: 'sm';
            background-color: #558000;
        }
    }
    @media (min-width: 768px) {
        .verstka:before {
            content: 'md';
            color: black;
            background-color: yellow;
        }
    }
    @media (min-width: 1024px) {
        .verstka:before {
            content: 'lg';
            color: white;
            background-color: darkred;
        }
    }
    @media (min-width: 1536px) {
        .verstka:before {
            content: 'xl';
            color: white;
            background-color: blue;
        }
    }
    @media (min-width: 1920px) {
        .verstka:before {
            content: '2xl';
            color: white;
            background-color: var(--main-clr);
        }
    }
</style>
<!-- End -->