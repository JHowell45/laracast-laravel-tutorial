
if [ -z "$1" ]
  then
    VERSION=0.0.1
  else
    VERSION=$1
fi
echo "Version number passed: $VERSION"

curl -L https://github.com/JHowell45/laravel-docker-template/archive/$VERSION.tar.gz | tar xz
