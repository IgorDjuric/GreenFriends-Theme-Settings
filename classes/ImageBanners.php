<?php

namespace GfThemeSettings;

class ImageBanners
{
    protected $options;

    public function __construct()
    {

        $this->init();
    }

    public function init()
    {
        add_shortcode('gfImageBanners', array($this, 'imageBanners'));
    }

    public function imageUploadField($name)
    {
        $options = get_option('gf-image-banners-values');
        if (!empty($options[$name]['id'])) {
            $image_attributes = wp_get_attachment_image_src($options[$name]['id']);
            $src = $image_attributes[0];
            $value = $options[$name]['id'];

        } else {
            $src = '';
            $value = '';
        }
        if (!empty($options[$name]['link'])) {
            $link = $options[$name]['link'];
        } else {
            $link = '';
        }
//        list($width, $height, $type, $attr) = getimagesize($src);

        echo '
        <div class="upload-image-wrapper">
            <img src="' . $src . '" width="" height=""/>
            <div>
                <input type="hidden" name="gf-image-banners-values[' . $name . '][id]" id="gf-image-banners-values[' . $name . '][id]" value="' . $value . '" />
                 <button type="submit" class="upload-image-banners-button button">Izaberite sliku</button>
                <button type="submit" class="upload-image-banners-button">Obrišite sliku</button>
                <input type="text" name="gf-image-banners-values[' . $name . '][link]" id="gf-image-banners-values[' . $name . '][link]" value="' . $link . '" />
            </div>
        </div>';
    }

    public function imageBanners()
    {
        $options = get_option('gf-image-banners-values');

        $i = 1;
        echo '<div class="row gf-image-banners">';
        foreach ($options as $option) {
            ;
            if (empty($option['id'])) {
                continue;
            }
            $image_attributes = wp_get_attachment_image_src($option['id']);
            $src = $image_attributes[0];
            $link = $option['link'];
            if ($i == 1 || $i % 3 == 1) {
                $class = 'row gf-image-banners-wider';
            } else {
                $class = 'col-6 gf-image-banners__item';
            }

            require(__DIR__ . "/../html/imageBanners.phtml");
            $i++;
        }
        echo '</div>';
    }
}