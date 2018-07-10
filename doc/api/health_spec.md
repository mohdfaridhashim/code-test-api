FORMAT: 1A

# Health

# Health [/health]
User resource representation.

## GET app health check [GET /health/check]
Get a JSON representation of app health

+ Request (application/json)

+ Response 200 (application/json)
    + Body

            {
                "title": "code-test",
                "api-version": "v1",
                "lumen-version": "Lumen (5.6.4) (Laravel Components 5.6.*)"
            }

## GET app maintenance [GET /health/maintenance]
Get a JSON representation of app maintenance mode

+ Request (application/json)

+ Response 200 (application/json)
    + Body

            {
                "error_message": "the backend on maintenance mode"
            }