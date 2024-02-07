<?PHP
    use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;
    
    class PersonalAccessToken extends SanctumPersonalAccessToken
    {
        //Add additional fields for Access Token
        public $incrementing = true;

        protected $primaryKey = "id";
        protected $keyType = "string";
    }