<?php

namespace Srmklive\PayPal\Traits\PayPalAPI;

trait CatalogProducts
{
    /**
     * Create a product.
     *
     * @param array $data
     *
     * @throws \Throwable
     *
     * @return array|\Psr\Http\Message\StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/catalog-products/v1/#products_create
     */
    public function createProduct(array $data)
    {
        $this->apiEndPoint = 'v1/catalogs/products';

        $this->options['json'] = $data;

        $this->verb = 'post';

        return $this->doPayPalRequest();
    }

    /**
     * List products.
     *
     * @throws \Throwable
     *
     * @return array|\Psr\Http\Message\StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/catalog-products/v1/#products_list
     */
    public function listProducts()
    {
        $this->apiEndPoint = "v1/catalogs/products?page={$this->current_page}&page_size={$this->page_size}&total_required={$this->show_totals}";

        $this->verb = 'get';

        return $this->doPayPalRequest();
    }

    /**
     * Update a product.
     *
     * @param string $product_id
     * @param array  $data
     *
     * @throws \Throwable
     *
     * @return array|\Psr\Http\Message\StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/catalog-products/v1/#products_patch
     */
    public function updateProduct(string $product_id, array $data)
    {
        $this->apiEndPoint = "v1/catalogs/products/{$product_id}";

        $this->options['json'] = $data;

        $this->verb = 'patch';

        return $this->doPayPalRequest(false);
    }

    /**
     * Get product details.
     *
     * @param string $product_id
     *
     * @throws \Throwable
     *
     * @return array|\Psr\Http\Message\StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/catalog-products/v1/#products_get
     */
    public function showProductDetails(string $product_id)
    {
        $this->apiEndPoint = "v1/catalogs/products/{$product_id}";

        $this->verb = 'get';

        return $this->doPayPalRequest();
    }
}
