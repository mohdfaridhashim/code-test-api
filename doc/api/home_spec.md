FORMAT: 1A

# LUMEN API SPEC

# Health [/health]
Health Checking

## GET app health check [GET /health/check]
Get a JSON representation of app health

+ Request (application/json)

+ Response 200 (application/json)
    + Body

            {
                "status": "SUCCESS",
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
                "status": "FAIL",
                "error_message": "the backend on maintenance mode"
            }

# Home
Default URL

## GET default API response [GET /]
Get a JSON representation of default URL

+ Request (application/json)

+ Response 200 (application/json)
    + Body

            {
                "status": "SUCESS",
                "title": "code-test",
                "api-version": "v1",
                "lumen-version": "Lumen (5.6.4) (Laravel Components 5.6.*)"
            }