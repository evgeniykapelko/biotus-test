# Magento 2 Product Stock Display for Hyvä Theme

This module displays the stock quantity for simple products on the product page in the Hyvä theme.

## Installation Instructions

### Install the module

Run the following command to register the module and update the database:

bin/magento setup:upgrade

bin/magento s:d:c

bin/magento setup:static-content:deploy -d

### Result
The stock quantity for simple products will now be displayed on the product page in the Hyvä theme.

If the product is in stock, it will show the available quantity.
The quantity will dynamically update for different products.


