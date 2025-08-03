$(document).ready(function () {
    $('.main-header').each((i, header) => {
        const checkbox = $(header).find('.toggle-menu');
        const burger = $(header).find('.burger-menu');
        const menu = $(header).find('.header-mobile');
        const parentItems = $(header).find('.menu-item-has-children');

        function handleDesktopMenu() {
            if (window.innerWidth > 1240 - 1 && $(header).hasClass('without-burger-on-desktop')) {
                //$('.menu-container').removeClass('hidden');

                // Gestion des événements mouseenter et mouseleave
                $(parentItems).on('mouseenter', function () {
                    $(menu).addClass('sub-menu-opened');
                    $(this).addClass('active');
                }).on('mouseleave', function () {
                    $(menu).removeClass('sub-menu-opened');
                    $(this).removeClass('active');
                });

                // Gestion des événements de clavier
                $(parentItems).on('keydown', function (e) {
                    const $parentItem = $(this);
                    const $subMenu = $parentItem.find('.sub-menu'); // Le sous-menu associé

                    // Si la touche Escape est pressée, fermer le sous-menu
                    if (e.key === "Escape") {
                        e.preventDefault();
                        $subMenu.removeClass('sub-menu-opened');
                        $parentItem.removeClass('active');
                        setTimeout(() => {
                            $parentItem.find('> a').focus();  // Applique le focus après un délai pour être sûr que l'élément est prêt
                        }, 50);
                    }

                    // Si Espace ou Entrée est pressé, ouvrir le sous-menu
                    if (e.key === " " || e.key === "Spacebar" || e.key === 'Enter') {
                        e.preventDefault();
                        $subMenu.toggleClass('sub-menu-opened');
                        $parentItem.toggleClass('active');
                        if ($subMenu.hasClass('sub-menu-opened')) {
                            $parentItem.find('> a').focus(); // Focus sur le lien du parent après ouverture
                        }
                    }
                });

                // Rendre les liens dans le sous-menu accessibles au clavier
                $(menu).find('.sub-menu a').attr('tabindex', '0').attr('aria-hidden', 'false');
            } else {
                // Si on est en mode mobile, on active le comportement de click pour ouvrir/fermer les sous-menus
                $(parentItems).find('> a').on('click', function (e) {
                    e.preventDefault();
                    $(burger).toggleClass('close');
                    $(burger).toggleClass('arrow');
                    $(menu).toggleClass('sub-menu-opened');
                    $(e.currentTarget).parents('.menu-item-has-children').toggleClass('active');

                    // Rendre accessibles les liens du sous-menu
                    $('.sub-menu a').attr('tabindex', '0').attr('aria-hidden', 'false');
                    $('.header-menu > .menu-item > a').attr('tabindex', '-1').attr('aria-hidden', 'true');
                    $('.socials-menu a').attr('tabindex', '-1').attr('aria-hidden', 'true');
                });

                // Ajout de gestion du clavier sur mobile pour ouvrir/fermer le sous-menu
                $(parentItems).on('keydown', function (e) {
                    const $parentItem = $(this);

                    // Si Espace ou Entrée est pressé, ouvrir/fermer le sous-menu
                    if (e.key === " " || e.key === "Spacebar" || e.key === 'Enter') {
                        // Si le sous-menu est déjà ouvert, autoriser la navigation
                        if ($(menu).hasClass('sub-menu-opened')) {
                            // Ne pas empêcher l'action par défaut (navigation vers la page)
                            e.stopPropagation();
                            $(burger).addClass('close');
                            $(burger).removeClass('arrow');
                        } else {
                            $(burger).removeClass('close');
                            $(burger).addClass('arrow');
                            e.preventDefault();  // Empêche la redirection pour ouvrir le sous-menu
                            $(menu).toggleClass('sub-menu-opened');
                            $parentItem.toggleClass('active');
                            $('.sub-menu a').attr('tabindex', '0').attr('aria-hidden', 'false');
                            $('.socials-menu a').attr('tabindex', '-1').attr('aria-hidden', 'true');
                            $('.header-menu > .menu-item > a').attr('tabindex', '-1').attr('aria-hidden', 'true');
                        }
                    }
                    // Si la touche Escape est pressée, fermer le sous-menu
                    if (e.key === "Escape") {
                        e.stopPropagation();
                        $(burger).addClass('close');
                        $(burger).removeClass('arrow');
                        $(menu).removeClass('sub-menu-opened');
                        $parentItem.removeClass('active');
                        $parentItem.find('> a').focus();  // Focus sur le parent après fermeture
                        $('.header-menu > .menu-item > a').attr('tabindex', '0').attr('aria-hidden', 'false');
                        $('.socials-menu a').attr('tabindex', '0').attr('aria-hidden', 'false');
                        $('.sub-menu a').attr('tabindex', '-1').attr('aria-hidden', 'true');
                    }
                });
            }
        }

        handleDesktopMenu();

        $(checkbox).on('change', (e) => {
            e.preventDefault();
            e.stopPropagation();

            if ($(checkbox).prop('checked')) {
                // Menu ouvert
                if ($(menu).hasClass('sub-menu-opened')) {
                    $(menu).removeClass('sub-menu-opened');
                    $(parentItems).removeClass('active');
                    $('.sub-menu a').attr('tabindex', '0').attr('aria-hidden', 'false');
                    $('.socials-menu a').attr('tabindex', '-1').attr('aria-hidden', 'true');
                    $('.header-menu > .menu-item > a').attr('tabindex', '-1').attr('aria-hidden', 'true');
                } else {
                    $(menu).addClass('active');
                    //$('.menu-container').removeClass('hidden');
                    $(burger).addClass('close');
                    //$(burger).attr('aria-expanded', 'true');
                    $('body').addClass('overflow-hidden');
                    $(menu).attr('aria-hidden', 'false');
                    $('.header-menu > .menu-item > a').attr('tabindex', '0').attr('aria-hidden', 'false');
                    $('.socials-menu a').attr('tabindex', '0').attr('aria-hidden', 'false');
                    $('.sub-menu a').attr('tabindex', '-1').attr('aria-hidden', 'true');
                }
            } else {
                //$('.menu-container').addClass('hidden');
                $(menu).removeClass('active');
                $(burger).removeClass('close');
                //$(burger).attr('aria-expanded', 'false');
                $('body').removeClass('overflow-hidden');
                $(menu).attr('aria-hidden', 'true');
                $('.header-menu > .menu-item > a').attr('tabindex', '-1').attr('aria-hidden', 'true');
                $('.socials-menu a').attr('tabindex', '-1').attr('aria-hidden', 'true');
                $('.sub-menu a').attr('tabindex', '-1').attr('aria-hidden', 'true');
            }
        });

        $(header).find('label.burger-menu').on('keydown', function (e) {
            // Si l'utilisateur appuie sur "Entrée" ou "Espace", on change l'état de la checkbox
            if (e.key === "Enter" || e.key === " " || e.key === "Spacebar") {
                e.preventDefault(); // Empêcher le comportement par défaut

                if ($(menu).hasClass('sub-menu-opened')) {
                    $(burger).removeClass('arrow');
                    $(burger).addClass('close');
                    $('.header-menu > .menu-item > a').attr('tabindex', '0').attr('aria-hidden', 'false');
                    $('.socials-menu a').attr('tabindex', '0').attr('aria-hidden', 'false');
                    $('.sub-menu a').attr('tabindex', '-1').attr('aria-hidden', 'true');
                    $(menu).removeClass('sub-menu-opened');
                    $(parentItems).removeClass('active');
                } else {
                    // Si le sous-menu est fermé, on change l'état de la checkbox
                    $(burger).toggleClass('close');
                    $(checkbox).prop('checked', !$(checkbox).prop('checked')).trigger('change');
                }
            }
        });
        $(header).find('label.burger-menu').on('click', function (e) {
            // Si l'utilisateur appuie sur "Entrée" ou "Espace", on change l'état de la checkbox
                e.preventDefault(); // Empêcher le comportement par défaut
                if ($(menu).hasClass('sub-menu-opened')) {
                    $(burger).removeClass('arrow');
                    $(burger).addClass('close');
                    $('.header-menu > .menu-item > a').attr('tabindex', '0').attr('aria-hidden', 'false');
                    $('.socials-menu a').attr('tabindex', '0').attr('aria-hidden', 'false');
                    $('.sub-menu a').attr('tabindex', '-1').attr('aria-hidden', 'true');
                    $(menu).removeClass('sub-menu-opened');
                    $(parentItems).removeClass('active');
                } else {
                    // Si le sous-menu est fermé, on change l'état de la checkbox
                    $(burger).toggleClass('close');
                    $(checkbox).prop('checked', !$(checkbox).prop('checked')).trigger('change');
                }
        });

        $(window).on('keydown', function (e) {
            if (e.key === "Escape" && $(checkbox).prop('checked')) {
                // Si le menu est ouvert (checkbox est cochée), fermer le menu
                $(burger).toggleClass('close');
                $(checkbox).prop('checked', false).trigger('change');
            }
        });

        $(window).on('resize', () => {
            handleDesktopMenu(); // Mettre à jour le comportement lors du redimensionnement
        });


        const sections = $('.section-container');
        const navLinks = $('li.menu-item');

        navLinks.on('click',  () =>{
            console.log('Hello');
            console.log(checkbox);
            checkbox.prop('checked', false).trigger('change');
            $('body').removeClass('overflow-hidden');
        });

        $(window).on('scroll', function () {
            var currentScroll = $(this).scrollTop();

            sections.each(function () {
                var sectionTop = $(this).offset().top - 70;
                var sectionBottom = sectionTop + $(this).outerHeight();

                if (currentScroll >= sectionTop && currentScroll <= sectionBottom) {
                    var currentId = $(this).attr('id');
                    navLinks.removeClass('current_page_item');

                    if (currentId === 'banner') {
                        $('li.menu-item:first-child').addClass('current_page_item');
                    } else {
                        console.log('hello')
                        $('li.menu-item a[href="#' + currentId + '"]').parent('li').addClass('current_page_item');
                    }
                }
            });
        });
    });
});
