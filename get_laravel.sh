
if [ -z "$1" ]
  then
    VERSION=0.0.2
  else
    VERSION=$1
fi
echo "Version number passed: $VERSION"

curl -L https://github.com/JHowell45/laravel-docker-template/archive/$VERSION.tar.gz | tar xz

mv laravel-docker-template-$VERSION laravel-vue-app