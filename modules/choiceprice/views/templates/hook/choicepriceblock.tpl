{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *}


<div id="modal" class="modal" style="display:none;">
    <p class="modal-text">В диапазоне от {$CHOICEPRICE_OT} до {$CHOICEPRICE_DO} найдено ... товаров.
        <span id="close">close</span>
    </p>
</div>

<script>
    var popup = document.querySelector('.modal');

    window.onload = function() {
        setTimeout(function() {
            popup.style.display = "block";
        }, 2000);
    }

    document.getElementById('close').onclick = function() {
        document.getElementById('modal').hidden = true;
    }
</script>