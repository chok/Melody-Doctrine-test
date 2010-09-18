# Steps by step melody installation #

  mkdir test
  
  cd test
  
  sf generate:project melody-test
  
  sf generate:app melody
  
  sf generate:module melody melody
  
  git init
  
  git submodule add git://github.com/chok/sfMelodyPlugin.git plugins/sfMelodyPlugin
  
  git submodule add git://github.com/chok/sfDoctrineOAuthPlugin.git plugins/sfDoctrineOAuthPlugin
  
  git submodule init
  
  git submodule update
  
  cd plugins/sfDoctrineOAuthPlugin
  
  git submodule init
  
  git submodule update
  
  cd ../../
  
  sf plugin:install sfDoctrineGuardPlugin
  
  Activate plugins in ProjectConfiguration
  
  sf plugin:publish-assets
  
  mysql -uroot -pxxx < data/sql/create-database.sql
  
  sf d:build --all --and-load --no-confirmation
  
  sf cc
  
  Set up vhost and host
  
  Enable the sfMelody plugin
  
  myUser extends sfMelodyUser
  
  create the application
  
  sf cc
 