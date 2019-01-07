# portal-nobetlistesi
NöbetListesi Modulü



Ödev modülünü portalınıza eklemek için yapmanız gereken işlemler

1-) Portal içerisindeki composer.json dosyasında repositories bölümüne modülün linkini eklemek.
        {
            "type": "vcs",
            "url": "https://github.com/demetkizilbuga/portal-nobetlistesi.git"
        },
        
2-) Portal klasörünün içerisindeki portal/backend/config/main.php , portal/frontend/config/main.php , portal/api/config/main.php dosyalarındaki modules bölümüne kendi modülünüzü eklemeniz gerekmektedir.       

       'nobetlistesi' => [
        'class' => 'kouosl\nobetlistesi\Module',
    ],
    
 3-) Composer.json a eklediğimiz repoyu sistemimize eklemek için vagrant ssh yaptıktan sonra cd /var/www/portal dizininde composer update veya composer require kouosl/portal-nobetlistesi:dev-master komutunu çalıştırınız.

 4-) Migration dosyası uplanarak veri tabanına modülde kullandığımız tablolar eklenir. Bunun için vagrant ssh da "php yii migrate --migrationPath=@vendor/kouosl/portal-nobetlistesi/migrations --interactive=0" komutu çalıştırılır
 
 
Bu dört adımı uyguladığınızda migrationdaki tablolar veri tabanına eklenecek ve github daki ödev modülü portal/vendor/kouosl dizininin altına portal-Odev olarak oluşarak portal.kouosl adresinden erişilebilir hale gelecektir. Erişmek istediğiniz sayfaya http://portal.kouosl/admin/nobetlistesi/nobetlistesi şeklinde erişebilirsiniz.

Aşağıdaki şekildeki gibidir modül tablolarım :

![ekran resmi 2019-01-06 00 24 24](https://user-images.githubusercontent.com/35598899/50765232-5b687200-1286-11e9-8d29-f72268f41f0e.png)
![ekran resmi 2019-01-06 00 23 58](https://user-images.githubusercontent.com/35598899/50765234-5c010880-1286-11e9-9e3f-2cd04291e85a.png)
![ekran resmi 2019-01-06 00 23 43](https://user-images.githubusercontent.com/35598899/50765235-5c999f00-1286-11e9-86c3-d82e0ed2ee18.png)
